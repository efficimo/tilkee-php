<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectsProjectIdRemoveItemsPostBody
{
    /**
     * @var int[]|null
     */
    protected $projectItemsIds;

    /**
     * @return int[]|null
     */
    public function getProjectItemsIds(): ?array
    {
        return $this->projectItemsIds;
    }

    /**
     * @param int[]|null $projectItemsIds
     */
    public function setProjectItemsIds(?array $projectItemsIds): self
    {
        $this->projectItemsIds = $projectItemsIds;

        return $this;
    }
}
