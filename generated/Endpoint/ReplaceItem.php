<?php

namespace HbsResearch\Tilkee\API\Endpoint;

class ReplaceItem extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $itemId;

    /**
     * Replace item with new item.
     *
     * @param int   $itemId          ID of item
     * @param array $queryParameters {
     *
     *     @var bool $all_chosen true if you want to replace item in all existing projects, false if you want to update only templates
     *     @var int $new_item_id ID of new item
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     */
    public function __construct(int $itemId, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->itemId = $itemId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(array('{itemId}'), array($this->itemId), '/items/{itemId}/replace');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('all_chosen', 'new_item_id'));
        $optionsResolver->setRequired(array('all_chosen', 'new_item_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('all_chosen', array('bool'));
        $optionsResolver->setAllowedTypes('new_item_id', array('int'));

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
     * @throws \HbsResearch\Tilkee\API\Exception\ReplaceItemBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ReplaceItemUnauthorizedException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ReplaceItemBadRequestException();
        }
        if (401 === $status) {
            throw new \HbsResearch\Tilkee\API\Exception\ReplaceItemUnauthorizedException();
        }
    }
}
