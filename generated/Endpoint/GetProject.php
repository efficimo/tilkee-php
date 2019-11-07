<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class GetProject extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $projectId;

    /**
     * Used to get all details of a specific project.
     *
     * @param int   $projectId       ID of project
     * @param array $queryParameters {
     *
     *     @var bool $iframe_url Tell if iframe links are wanted
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     *     @var int $USER_ID Tilkee user id
     *     @var string $USER_EMAIL Tilkee user email
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
        return str_replace(['{projectId}'], [$this->projectId], '/projects/{projectId}');
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
        $optionsResolver->setDefined(['iframe_url']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('iframe_url', ['bool']);

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
     * @throws \HbsResearch\Tilkee\API\Exception\GetProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\GetProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Project|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\Project', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\GetProjectBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\GetProjectUnauthorizedException();
        }
    }
}
