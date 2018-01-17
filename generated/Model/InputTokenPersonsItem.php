<?php

namespace Tilkee\API\Model;

class InputTokenPersonsItem
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $externalId;
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
    /**
     * @return int
     */
    public function getExternalId()
    {
        return $this->externalId;
    }
    /**
     * @param int $externalId
     *
     * @return self
     */
    public function setExternalId($externalId = null)
    {
        $this->externalId = $externalId;
        return $this;
    }
}