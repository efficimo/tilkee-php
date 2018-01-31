<?php

namespace Tilkee\Manager;

use Http\Client\Common\FlexibleHttpClient;
use Http\Message\MessageFactory;
use Http\Message\MultipartStream\MultipartStreamBuilder;
use Http\Message\StreamFactory;
use Tilkee\API\Model\UploadInformation;

class S3Manager
{
    /**
     * @var HttpClient|HttpAsyncClient
     */
    protected $httpClient;

    /**
     * @var MessageFactory
     */
    protected $messageFactory;

    /**
     * @var StreamFactory
     */
    protected $streamFactory;

    public function __construct($httpClient, MessageFactory $messageFactory, StreamFactory $streamFactory)
    {
        $this->httpClient = new FlexibleHttpClient($httpClient);
        $this->messageFactory = $messageFactory;
        $this->streamFactory = $streamFactory;
    }

    /**
     * @param UploadInformation $uploadInformation
     * @param resource $file
     * @param string $filename
     * @return null|\Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    public function uploadFile(UploadInformation $uploadInformation, $file, string $filename)
    {
        $url = $uploadInformation->getS3Endpoint();

        $builder = new MultipartStreamBuilder($this->streamFactory);
        $builder
            ->addResource('key', $uploadInformation->getKey())
            ->addResource('acl', $uploadInformation->getAcl())
            ->addResource('policy', $uploadInformation->getPolicy())
            ->addResource('Signature', $uploadInformation->getSignature())
            ->addResource('AWSAccessKeyId', $uploadInformation->getAWSAccessKeyId())
            ->addResource('success_action_status', $uploadInformation->getSuccessActionStatus())
            ->addResource('file', $file, ['filename' => $filename]);

        $multipartStream = $builder->build();
        $boundary = $builder->getBoundary();

        $headers = [
            //'Host' => 'api-staging.tilkee.com',
            'Content-Type' => 'multipart/form-data; boundary="'.$boundary.'"'
        ];

        $request = $this->messageFactory->createRequest('POST', $url, $headers, $multipartStream);
        $promise = $this->httpClient->sendAsyncRequest($request);

        $response = $promise->wait();

//        if (self::FETCH_OBJECT == $fetch) {
//            if ('200' == $response->getStatusCode()) {
//                return null;
//            }
//            if ('400' == $response->getStatusCode()) {
//                return null;
//            }
//            if ('401' == $response->getStatusCode()) {
//                return null;
//            }
//        }
        return $response;
    }
}