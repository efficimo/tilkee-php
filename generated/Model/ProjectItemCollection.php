<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectItemCollection
{
    /**
     * @var ProjectItem[]
     */
    protected $items;
    /**
     * @return ProjectItem[]
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * @param ProjectItem[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;
        return $this;
    }
}