<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class ListTilks extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * This command is used to retrieve all of your tilks, this way you can filter them (by interest for instance).
     *
     * @param array $queryParameters {
     *
     *     @var int $limit
     *     @var int $offset
     *     @var string $order
     *     @var bool $is_owner
     *     @var bool $archived_tokens
     *     @var bool $accessible_tokens Not archived tokens in not archived projects
     *     @var bool $consulted
     *     @var int $project_id
     *     @var int $nb_connections
     *     @var int $interest
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     *     @var int $USER_ID Tilkee user id
     *     @var string $USER_EMAIL Tilkee user email
     * }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
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
        return '/tokens';
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
        $optionsResolver->setDefined(['limit', 'offset', 'order', 'is_owner', 'archived_tokens', 'accessible_tokens', 'consulted', 'project_id', 'nb_connections', 'interest']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('offset', ['int']);
        $optionsResolver->setAllowedTypes('order', ['string']);
        $optionsResolver->setAllowedTypes('is_owner', ['bool']);
        $optionsResolver->setAllowedTypes('archived_tokens', ['bool']);
        $optionsResolver->setAllowedTypes('accessible_tokens', ['bool']);
        $optionsResolver->setAllowedTypes('consulted', ['bool']);
        $optionsResolver->setAllowedTypes('project_id', ['int']);
        $optionsResolver->setAllowedTypes('nb_connections', ['int']);
        $optionsResolver->setAllowedTypes('interest', ['int']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['x-tilk-ref', 'USER_ID', 'USER_EMAIL']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('x-tilk-ref', ['string']);
        $optionsResolver->setAllowedTypes('USER_ID', ['int']);
        $optionsResolver->setAllowedTypes('USER_EMAIL', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \HbsResearch\Tilkee\API\Exception\ListTilksBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ListTilksUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseTokenList|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\ResponseTokenList', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ListTilksBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ListTilksUnauthorizedException();
        }
    }
}
