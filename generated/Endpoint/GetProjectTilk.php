<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class GetProjectTilk extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $projectId;
    protected $id;

    /**
     * Used to get every details of a link (Tilk). You need a project id and a Tilk id.
     *
     * @param int   $projectId        ID of project
     * @param int   $id               ID of tilk
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     */
    public function __construct(int $projectId, int $id, array $headerParameters = array())
    {
        $this->projectId = $projectId;
        $this->id = $id;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(array('{projectId}', '{id}'), array($this->projectId, $this->id), '/projects/{projectId}/tokens/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }

    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
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
     * @throws \HbsResearch\Tilkee\API\Exception\GetProjectTilkBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\GetProjectTilkUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Token|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\Token', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\GetProjectTilkBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\GetProjectTilkUnauthorizedException();
        }
    }
}
