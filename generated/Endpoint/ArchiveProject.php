<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class ArchiveProject extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $projectId;

    /**
     * Usse this method to archive a project, you can use the won parameter to archive won, lost or undefined.
     *
     * @param int   $projectId        ID of project
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     */
    public function __construct(int $projectId, \HbsResearch\Tilkee\API\Model\ProjectsProjectIdArchivePostBody $requestBody, array $headerParameters = [])
    {
        $this->projectId = $projectId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{projectId}'], [$this->projectId], '/projects/{projectId}/archive');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \HbsResearch\Tilkee\API\Model\ProjectsProjectIdArchivePostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

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
     * @throws \HbsResearch\Tilkee\API\Exception\ArchiveProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ArchiveProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseProjectArchive|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\ResponseProjectArchive', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ArchiveProjectBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ArchiveProjectUnauthorizedException();
        }
    }
}
