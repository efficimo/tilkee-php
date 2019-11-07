<?php

namespace HbsResearch\Tilkee;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Uri;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\ContentLengthPlugin;
use Http\Client\Common\Plugin\ContentTypePlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Client\Common\Plugin\LoggerPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Message\Authentication\Bearer;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\NullLogger;
use Psr\Log\Test\TestLogger;

class TilkeeClient implements HttpClient
{
    private $httpClient;

    private $authentication;
    private $tilkRef;
    private $clientOptions;

    public function __construct(Bearer $authentication, string $tilkRef, $clientOptions = [])
    {
        $this->authentication = $authentication;
        $this->tilkRef = $tilkRef;
        $this->clientOptions = $clientOptions;
    }

    private function getHttpClient()
    {
        if (null !== $this->httpClient) {
            return $this->httpClient;
        }

        $host = isset($this->clientOptions['host']) ? $this->clientOptions['host'] : 'https://app-staging.tilkee.com';
        $headers = [
            'x-tilk-ref' => $this->tilkRef,
            'accept' => 'application/json',
            'accept-encoding' => 'gzip, deflate, compress',
        ];

        $this->httpClient = new PluginClient(
            new GuzzleAdapter(new GuzzleClient([])),
            [
                new AuthenticationPlugin($this->authentication),
                new HeaderSetPlugin($headers),
                new AddHostPlugin(new Uri($host)),
                new AddPathPlugin(new Uri($host.'/v2/')),
                new ErrorPlugin(),
                new ContentLengthPlugin(),
                new ContentTypePlugin(),
            ]
        );

        return $this->httpClient;
    }

    /**
     * (@inheritdoc}.
     */
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->getHttpClient()->sendRequest($request);
    }
}
