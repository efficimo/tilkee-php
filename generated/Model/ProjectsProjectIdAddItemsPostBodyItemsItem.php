<?php

namespace Tilkee\API\Model;

class ProjectsProjectIdAddItemsPostBodyItemsItem
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var bool
     */
    protected $signable;
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
}