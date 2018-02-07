<?php

namespace HbsResearch\Tilkee\API\Model;

class UserUtmItemUTM
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
}