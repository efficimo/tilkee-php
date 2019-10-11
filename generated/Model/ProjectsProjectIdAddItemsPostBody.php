<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectsProjectIdAddItemsPostBody
{
    /**
     * @var ProjectsProjectIdAddItemsPostBodyItemsItem[]|null
     */
    protected $items;

    /**
     * @return ProjectsProjectIdAddItemsPostBodyItemsItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param ProjectsProjectIdAddItemsPostBodyItemsItem[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
