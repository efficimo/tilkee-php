<?php

namespace Tilkee;

use Tilkee\API\Normalizer\NormalizerFactory;
use Tilkee\Manager\ItemManager;
use Tilkee\Manager\ProjectManager;
use Tilkee\Manager\TilkManager;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Tilkee\Tilkee
 */
class Tilkee
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var MessageFactory
     */
    private $messageFactory;

    /**
     * @var ProjectManager
     */
    private $projectManager;

    /**
     * @var TilkManager
     */
    private $tilkManager;

    /**
     * @var ItemManager
     */
    private $itemManager;

    /**
     * @param HttpClient|null     $httpClient     Http client to use with Tilkee
     * @param Serializer|null     $serializer     Deserialize Tilkee response into php objects
     * @param MessageFactory|null $messageFactory How to create Tilkee request (in PSR7)
     */
    public function __construct(HttpClient $httpClient, Serializer $serializer = null, MessageFactory $messageFactory = null)
    {
        $this->httpClient = $httpClient;

        if ($serializer === null) {
            $serializer = new Serializer(
                NormalizerFactory::create(),
                [
                    new JsonEncoder(
                        new JsonEncode(),
                        new JsonDecode()
                    )
                ]
            );
        }

        if ($messageFactory === null) {
            $messageFactory = new MessageFactory\GuzzleMessageFactory();
        }

        $this->serializer = $serializer;
        $this->messageFactory = $messageFactory;
    }

    /**
     * @return ItemManager
     */
    public function getItemManager()
    {
        if (null === $this->itemManager) {
            $this->itemManager = new ItemManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->itemManager;
    }

    /**
     * @return ProjectManager
     */
    public function getProjectManager()
    {
        if (null === $this->projectManager) {
            $this->projectManager = new ProjectManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->projectManager;
    }

    /**
     * @return TilkManager
     */
    public function getTilkManager()
    {
        if (null === $this->tilkManager) {
            $this->tilkManager = new TilkManager($this->httpClient, $this->messageFactory, $this->serializer);
        }

        return $this->tilkManager;
    }
}
