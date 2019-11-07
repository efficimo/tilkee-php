<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class ListProjectTilks extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $projectId;

    /**
     * You can have several links (Tilks) for a project. This command is used to retrieve all of them. A project id is needed.
     *
     * @param int   $projectId       ID of project
     * @param array $queryParameters {
     *
     *     @var string $search Title, name, email, token_url
     *     @var int $limit
     *     @var int $offset
     *     @var string $order
     *     @var bool $archived_tokens
     *     @var string $signed_status
     *     @var bool $consulted
     *     @var bool $signed
     *     @var int $nb_connections
     *     @var int $interest
     *     @var string $external_id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     */
    public function __construct(int $projectId, array $queryParameters = [], array $headerParameters = [])
    {
        $this->projectId = $projectId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{projectId}'], [$this->projectId], '/projects/{projectId}/tokens');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['search', 'limit', 'offset', 'order', 'archived_tokens', 'signed_status', 'consulted', 'signed', 'nb_connections', 'interest', 'external_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('search', ['string']);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('offset', ['int']);
        $optionsResolver->setAllowedTypes('order', ['string']);
        $optionsResolver->setAllowedTypes('archived_tokens', ['bool']);
        $optionsResolver->setAllowedTypes('signed_status', ['string']);
        $optionsResolver->setAllowedTypes('consulted', ['bool']);
        $optionsResolver->setAllowedTypes('signed', ['bool']);
        $optionsResolver->setAllowedTypes('nb_connections', ['int']);
        $optionsResolver->setAllowedTypes('interest', ['int']);
        $optionsResolver->setAllowedTypes('external_id', ['string']);

        return $optionsResolver;
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
     * @throws \HbsResearch\Tilkee\API\Exception\ListProjectTilksBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ListProjectTilksUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseTokenList|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\ResponseTokenList', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ListProjectTilksBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ListProjectTilksUnauthorizedException();
        }
    }
}
