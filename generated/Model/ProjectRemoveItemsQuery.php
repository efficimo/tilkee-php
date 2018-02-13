<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectRemoveItemsQuery
{
    /**
     * @var int[]
     */
    protected $projectItemsIds;
    /**
     * @return int[]
     */
    public function getProjectItemsIds()
    {
        return $this->projectItemsIds;
    }
    /**
     * @param int[] $projectItemsIds
     *
     * @return self
     */
    public function setProjectItemsIds(array $projectItemsIds = null)
    {
        $this->projectItemsIds = $projectItemsIds;
        return $this;
    }
}