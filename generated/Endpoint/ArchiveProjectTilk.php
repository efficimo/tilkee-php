<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class ArchiveProjectTilk extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $projectId;
    protected $id;

    /**
     * In this section you can archive your tilks.
     *
     * @param int   $projectId        ID of project
     * @param int   $id               ID of tilk
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     */
    public function __construct(int $projectId, int $id, array $headerParameters = [])
    {
        $this->projectId = $projectId;
        $this->id = $id;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{projectId}', '{id}'], [$this->projectId, $this->id], '/projects/{projectId}/tokens/{id}/archive/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['x-tilk-ref']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('x-tilk-ref', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \HbsResearch\Tilkee\API\Exception\ArchiveProjectTilkBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ArchiveProjectTilkUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Token|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\Token', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ArchiveProjectTilkBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ArchiveProjectTilkUnauthorizedException();
        }
    }
}
