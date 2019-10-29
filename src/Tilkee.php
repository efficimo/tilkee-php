<?php

namespace HbsResearch\Tilkee;

use HbsResearch\Tilkee\API\Client as ApiClient;
use HbsResearch\Tilkee\API\Model\UploadInformation;
use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Message\MultipartStream\MultipartStreamBuilder;
use Http\Promise\Promise;

class Tilkee
{
    private $tilkeeHttpClient;
    private $client;
    private $amazonHttpClient;

    public function __construct(HttpClient $tilkeeHttpClient, HttpAsyncClient $amazonHttpClient)
    {
        $this->tilkeeHttpClient = $tilkeeHttpClient;
        $this->amazonHttpClient = $amazonHttpClient;
    }

    public function uploadFile(UploadInformation $uploadInformation, $file, string $filename, callable $fulfilled): Promise
    {
        $url = $uploadInformation->getS3Endpoint();

        $builder = new MultipartStreamBuilder();
        $builder
            ->addResource('key', $uploadInformation->getKey())
            ->addResource('acl', $uploadInformation->getAcl())
            ->addResource('policy', $uploadInformation->getPolicy())
            ->addResource('Signature', $uploadInformation->getSignature())
            ->addResource('AWSAccessKeyId', $uploadInformation->getAWSAccessKeyId())
            ->addResource('success_action_status', $uploadInformation->getSuccessActionStatus())
            ->addResource('file', $file, ['filename' => $filename])
        ;

        $multipartStream = $builder->build();
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();

        $request = ($requestFactory->createRequest('POST', $url))
            ->withHeader('Content-Type', 'multipart/form-data; boundary="'.$builder->getBoundary().'"')
            ->withBody($multipartStream)
        ;

        $promise = $this->amazonHttpClient->sendAsyncRequest($request);
        $promise->then(function ($response) use ($fulfilled) {
            $fulfilled(UploadedFileResponse::fromResponse($response));
        });

        return $promise;
    }

    public function getClient(): ApiClient
    {
        if (null === $this->client) {
            $this->client = ApiClient::create($this->tilkeeHttpClient);
        }

        return $this->client;
    }
}
