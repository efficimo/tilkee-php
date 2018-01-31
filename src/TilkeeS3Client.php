<?php
namespace Tilkee;

use GuzzleHttp\Client as GuzzleClient;
//use GuzzleHttp\Psr7\Uri;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
//use Http\Client\Common\Plugin\AddHostPlugin;
//use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
//use Http\Message\Authentication\Bearer;
use Psr\Http\Message\RequestInterface;

class TilkeeS3Client implements HttpClient
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    public function __construct($clientOptions = [])
    {
//        $host = isset($clientOptions['host']) ? $clientOptions['host'] : 'https://api-staging.tilkee.com/';
        $headers = [
//            'accept' => 'application/json',
//            'accept-encoding' => 'gzip, deflate, compress'
        ];

        $this->httpClient = new PluginClient(
            new GuzzleAdapter(new GuzzleClient([])),
            [
                new HeaderSetPlugin($headers),
//                new AddHostPlugin(new Uri($host)),
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