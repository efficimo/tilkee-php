<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class CreateItems extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * This section allows you to create items. You have 3 possibilities: add a document from a URL, add text or add external content.'.
     *
     * @param \HbsResearch\Tilkee\API\Model\InputItem[] $requestBody
     * @param array                                     $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     */
    public function __construct(array $requestBody, array $headerParameters = array())
    {
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
        return '/items/';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \HbsResearch\Tilkee\API\Model\InputItem) {
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
     * @throws \HbsResearch\Tilkee\API\Exception\CreateItemsBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\CreateItemsUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ItemWithOwnership[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\ItemWithOwnership[]', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\CreateItemsBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\CreateItemsUnauthorizedException();
        }
    }
}
