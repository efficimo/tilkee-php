<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class GetUploadFileInformation extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Use this to get the s3 informations to be used to upload on S3.
     *
     * @param array $queryParameters {
     *
     *     @var string $filename
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
        return '/direct_upload_data/';
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
        $optionsResolver->setDefined(array('filename'));
        $optionsResolver->setRequired(array('filename'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('filename', array('string'));

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
     * @throws \HbsResearch\Tilkee\API\Exception\GetUploadFileInformationBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\GetUploadFileInformationUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\UploadInformation|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'HbsResearch\\Tilkee\\API\\Model\\UploadInformation', 'json');
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\GetUploadFileInformationBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\GetUploadFileInformationUnauthorizedException();
        }
    }
}
