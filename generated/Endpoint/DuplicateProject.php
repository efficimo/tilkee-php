<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class DuplicateProject extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $projectId;

    /**
     * In this section you can create a project using an existing one (copying it). Every part of the new project will be the same except the tilks.
     *
     * @param int                                                              $projectId        ID of project
     * @param \HbsResearch\Tilkee\API\Model\ProjectsProjectIdDuplicatePostBody $requestBody
     * @param array                                                            $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     */
    public function __construct(int $projectId, \HbsResearch\Tilkee\API\Model\ProjectsProjectIdDuplicatePostBody $requestBody, array $headerParameters = array())
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
        return str_replace(array('{projectId}'), array($this->projectId), '/projects/{projectId}/duplicate');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \HbsResearch\Tilkee\API\Model\ProjectsProjectIdDuplicatePostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }

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
     * @throws \HbsResearch\Tilkee\API\Exception\DuplicateProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\DuplicateProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseProjectDuplicate|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\ResponseProjectDuplicate', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\DuplicateProjectBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\DuplicateProjectUnauthorizedException();
        }
    }
}
