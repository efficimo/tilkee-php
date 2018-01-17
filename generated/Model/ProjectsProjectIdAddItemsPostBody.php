<?php

namespace Tilkee\API\Model;

class ProjectsProjectIdAddItemsPostBody
{
    /**
     * @var ProjectsProjectIdAddItemsPostBodyItemsItem[]
     */
    protected $items;
    /**
     * @return ProjectsProjectIdAddItemsPostBodyItemsItem[]
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * @param ProjectsProjectIdAddItemsPostBodyItemsItem[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;
        return $this;
    }
}