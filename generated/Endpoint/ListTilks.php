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
     * }
     */
    public function __construct(array $queryParameters = array(), array $headerParameters = array())
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
        return array(array(), null);
    }

    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('limit', 'offset', 'order', 'is_owner', 'archived_tokens', 'accessible_tokens', 'consulted', 'project_id', 'nb_connections', 'interest'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('order', array('string'));
        $optionsResolver->setAllowedTypes('is_owner', array('bool'));
        $optionsResolver->setAllowedTypes('archived_tokens', array('bool'));
        $optionsResolver->setAllowedTypes('accessible_tokens', array('bool'));
        $optionsResolver->setAllowedTypes('consulted', array('bool'));
        $optionsResolver->setAllowedTypes('project_id', array('int'));
        $optionsResolver->setAllowedTypes('nb_connections', array('int'));
        $optionsResolver->setAllowedTypes('interest', array('int'));

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('x-tilk-ref'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('x-tilk-ref', array('string'));

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
