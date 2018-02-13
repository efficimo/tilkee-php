<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectDuplicateQuery
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $canBeDownladed;
    /**
     * @var string
     */
    protected $archivedAt;
    /**
     * @var bool
     */
    protected $shouldDuplicateAssignments;
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
    public function getShouldDuplicateAssignments()
    {
        return $this->shouldDuplicateAssignments;
    }
    /**
     * @param bool $shouldDuplicateAssignments
     *
     * @return self
     */
    public function setShouldDuplicateAssignments($shouldDuplicateAssignments = null)
    {
        $this->shouldDuplicateAssignments = $shouldDuplicateAssignments;
        return $this;
    }
}