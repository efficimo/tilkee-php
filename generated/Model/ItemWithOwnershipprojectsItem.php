<?php

namespace HbsResearch\Tilkee\API\Model;

class ItemWithOwnershipprojectsItem
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
}