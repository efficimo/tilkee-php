<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class UpdateProjectTilk extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $projectId;
    protected $id;

    /**
     * Used to update Tilk parameters like name or status.
     *
     * @param int   $projectId        ID of project
     * @param int   $id               ID of tilk
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     *     @var int $USER_ID Tilkee user id
     *     @var string $USER_EMAIL Tilkee user email
     * }
     */
    public function __construct(int $projectId, int $id, \HbsResearch\Tilkee\API\Model\ProjectsProjectIdTokensIdPutBody $requestBody, array $headerParameters = [])
    {
        $this->projectId = $projectId;
        $this->id = $id;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{projectId}', '{id}'], [$this->projectId, $this->id], '/projects/{projectId}/tokens/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \HbsResearch\Tilkee\API\Model\ProjectsProjectIdTokensIdPutBody) {
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
     * @throws \HbsResearch\Tilkee\API\Exception\UpdateProjectTilkBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\UpdateProjectTilkUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Token|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\Token', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\UpdateProjectTilkBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\UpdateProjectTilkUnauthorizedException();
        }
    }
}
