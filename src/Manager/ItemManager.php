<?php
namespace HbsResearch\Tilkee\Manager;

use HbsResearch\Tilkee\API\Resource\ItemResource;
use HbsResearch\Tilkee\API\Model\ItemFromS3;

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

    /**
     * @param array $items
     * @param array $parameters
     * @param string $fetch
     * @return \HbsResearch\Tilkee\API\Model\Item[]|null|\Psr\Http\Message\ResponseInterface
     */
    public function createItems($items, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $items = $this->serializer->serialize($items, 'json');

        return parent::createItems($items, $parameters, $fetch);
    }

    /**
     * @param $filename
     * @param $s3Url
     * @param null $externalId
     * @return \HbsResearch\Tilkee\API\Model\Item
     */
    public function createItemFromS3($filename, $s3Url, $externalId = null)
    {
        $item = new ItemFromS3();
        $item->setName($filename);
        $item->setS3Url($s3Url);
        $item->setExternalId($externalId);
        $item->setFromUrl(true);
        $item->setType('file');

        $items = $this->createItems([$item]);

        return $items[0];
    }
}
