<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class ListItems extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Use this to get the list of items you added to your Tilkee account.
     *
     * @param array $queryParameters {
     *
     *     @var string $search Title, owner name
     *     @var int $limit
     *     @var int $offset
     *     @var string $order -items.created_at
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
        return '/items/';
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
        $optionsResolver->setDefined(['search', 'limit', 'offset', 'order']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('search', ['string']);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('offset', ['int']);
        $optionsResolver->setAllowedTypes('order', ['string']);

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
     * @throws \HbsResearch\Tilkee\API\Exception\ListItemsBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ListItemsUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseItemList|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\ResponseItemList', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ListItemsBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ListItemsUnauthorizedException();
        }
    }
}
