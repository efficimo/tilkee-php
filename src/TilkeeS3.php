<?php

namespace HbsResearch\Tilkee;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Message\StreamFactory;
use HbsResearch\Tilkee\Manager\S3Manager;

class TilkeeS3
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var MessageFactory
     */
    private $messageFactory;

    /**
     * @var StreamFactory
     */
    private $streamFactory;

    /**
     * @var S3Manager
     */
    private $s3Manager;

    /**
     * @param HttpClient|null $httpClient Http client to use with HbsResearch\Tilkee
     * @param MessageFactory|null $messageFactory How to create HbsResearch\Tilkee request (in PSR7)
     * @param StreamFactory|null $streamFactory
     */
    public function __construct(HttpClient $httpClient, MessageFactory $messageFactory = null, StreamFactory $streamFactory = null)
    {
        $this->httpClient = $httpClient;

        if ($messageFactory === null) {
            $messageFactory = new MessageFactory\GuzzleMessageFactory();
        }

        if ($streamFactory === null) {
            $streamFactory = new StreamFactory\GuzzleStreamFactory();
        }

        $this->messageFactory = $messageFactory;
        $this->streamFactory = $streamFactory;
    }

    /**
     * @return S3Manager
     */
    public function getS3Manager()
    {
        if (null === $this->s3Manager) {
            $this->s3Manager = new S3Manager($this->httpClient, $this->messageFactory, $this->streamFactory);
        }

        return $this->s3Manager;
    }

}