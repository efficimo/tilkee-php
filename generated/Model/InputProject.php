<?php

namespace HbsResearch\Tilkee\API\Model;

class InputProject
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $archivedAt;
    /**
     * @var bool
     */
    protected $canBeDownladed;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @var int
     */
    protected $duration;
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
     * @return string
     */
    public function getArchivedAt()
    {
        return $this->archivedAt;
    }
    /**
     * @param string $archivedAt
     *
     * @return self
     */
    public function setArchivedAt($archivedAt = null)
    {
        $this->archivedAt = $archivedAt;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCanBeDownladed()
    {
        return $this->canBeDownladed;
    }
    /**
     * @param bool $canBeDownladed
     *
     * @return self
     */
    public function setCanBeDownladed($canBeDownladed = null)
    {
        $this->canBeDownladed = $canBeDownladed;
        return $this;
    }
    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }
    /**
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId($externalId = null)
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * @param int $duration
     *
     * @return self
     */
    public function setDuration($duration = null)
    {
        $this->duration = $duration;
        return $this;
    }
}