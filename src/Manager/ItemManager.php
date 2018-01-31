<?php
namespace Tilkee\Manager;

use Tilkee\API\Resource\ItemResource;

class ItemManager extends ItemResource
{
    /**
     * @param array $parameters
     * @param string $fetch
     * @return null|\Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\UploadInformation
     * @deprecated use ItemManager::getUploadFileInformation() instead
     */
    public function uploadItem($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        return $this->getUploadFileInformation($parameters, $fetch);
    }
}