<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class ListProject extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Used to get a list of all your projects.
     *
     * @param array $queryParameters {
     *
     *     @var string $search Name
     *     @var int $limit
     *     @var int $offset
     *     @var string $status
     *     @var int $user_id To see projects to specific user. Management need to be active in company.
     *     @var bool $is_template
     *     @var string $name
     *     @var bool $won
     *     @var bool $can_be_downloaded
     *     @var bool $is_or_was_signed
     *     @var bool $signed
     *     @var bool $starred
     *     @var int $nb_connections
     *     @var int $leader_id
     *     @var string $external_id
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
        return '/projects';
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
        $optionsResolver->setDefined(array('search', 'limit', 'offset', 'status', 'user_id', 'is_template', 'name', 'won', 'can_be_downloaded', 'is_or_was_signed', 'signed', 'starred', 'nb_connections', 'leader_id', 'external_id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('search', array('string'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('user_id', array('int'));
        $optionsResolver->setAllowedTypes('is_template', array('bool'));
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('won', array('bool'));
        $optionsResolver->setAllowedTypes('can_be_downloaded', array('bool'));
        $optionsResolver->setAllowedTypes('is_or_was_signed', array('bool'));
        $optionsResolver->setAllowedTypes('signed', array('bool'));
        $optionsResolver->setAllowedTypes('starred', array('bool'));
        $optionsResolver->setAllowedTypes('nb_connections', array('int'));
        $optionsResolver->setAllowedTypes('leader_id', array('int'));
        $optionsResolver->setAllowedTypes('external_id', array('string'));

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
     * @throws \HbsResearch\Tilkee\API\Exception\ListProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ListProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseProjectList|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\ResponseProjectList', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ListProjectBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ListProjectUnauthorizedException();
        }
    }
}
