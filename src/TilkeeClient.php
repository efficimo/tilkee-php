<?php

namespace HbsResearch\Tilkee;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Uri;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\ContentLengthPlugin;
use Http\Client\Common\Plugin\ContentTypePlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Message\Authentication\Bearer;
use Psr\Http\Message\RequestInterface;

class TilkeeClient implements HttpClient
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    public function __construct(Bearer $authentication, string $tilkRef, $clientOptions = [])
    {
        $host = isset($clientOptions['host']) ? $clientOptions['host'] : 'https://api-staging.tilkee.com/';
        $headers = [
            'x-tilk-ref' => $tilkRef,
            'accept' => 'application/json',
            'accept-encoding' => 'gzip, deflate, compress'
        ];

        $this->httpClient = new PluginClient(
            new GuzzleAdapter(new GuzzleClient([])),
            [
                new AuthenticationPlugin($authentication),
                new HeaderSetPlugin($headers),
                new AddHostPlugin(new Uri($host)),
                new ErrorPlugin(),
                new ContentLengthPlugin(),
                new ContentTypePlugin()
            ]
        );
    }

    /**
     * (@inheritdoc}
     */
    public function sendRequest(RequestInterface $request)
    {
        return $this->httpClient->sendRequest($request);
    }
}
