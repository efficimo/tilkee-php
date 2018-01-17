<?php

namespace Tilkee\API\Model;

class ProjectItem
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $elementId;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var bool
     */
    protected $signable;
    /**
     * @var Item
     */
    protected $item;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * @return int
     */
    public function getElementId()
    {
        return $this->elementId;
    }
    /**
     * @param int $elementId
     *
     * @return self
     */
    public function setElementId($elementId = null)
    {
        $this->elementId = $elementId;
        return $this;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title = null)
    {
        $this->title = $title;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSignable()
    {
        return $this->signable;
    }
    /**
     * @param bool $signable
     *
     * @return self
     */
    public function setSignable($signable = null)
    {
        $this->signable = $signable;
        return $this;
    }
    /**
     * @return Item
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * @param Item $item
     *
     * @return self
     */
    public function setItem(Item $item = null)
    {
        $this->item = $item;
        return $this;
    }
}