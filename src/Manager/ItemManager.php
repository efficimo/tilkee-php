<?php
namespace HbsResearch\Tilkee\Manager;

use HbsResearch\Tilkee\API\Resource\ItemResource;

class ItemManager extends ItemResource
{
    /**
     * @param array $parameters
     * @param string $fetch
     * @return null|\Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\UploadInformation
     * @deprecated use ItemManager::getUploadFileInformation() instead
     */
    public function uploadItem($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        return $this->getUploadFileInformation($parameters, $fetch);
    }
    public function createItems($items, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $items = $this->serializer->serialize($items, 'json');

        return parent::createItems($items, $parameters, $fetch);
    }

}
