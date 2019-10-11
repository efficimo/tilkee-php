<?php

namespace HbsResearch\Tilkee;

use HbsResearch\Tilkee\API\Client as ApiClient;
use Http\Client\HttpClient;

class Tilkee
{
    private $client;

    public function __construct(HttpClient $httpClient)
    {
        $this->client = ApiClient::create($httpClient);
     }

    public function getClient(): ApiClient
    {
        return $this->client;
    }
}
