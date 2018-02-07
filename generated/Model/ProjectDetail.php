<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectDetail
{
    /**
     * @var int
     */
    protected $nbConnections;
    /**
     * @var int
     */
    protected $totalTime;
    /**
     * @var Leader
     */
    protected $leader;
    /**
     * @var Collaborator[]
     */
    protected $collaborators;
    /**
     * @var Theme
     */
    protected $theme;
    /**
     * @return int
     */
    public function getNbConnections()
    {
        return $this->nbConnections;
    }
    /**
     * @param int $nbConnections
     *
     * @return self
     */
    public function setNbConnections($nbConnections = null)
    {
        $this->nbConnections = $nbConnections;
        return $this;
    }
    /**
     * @return int
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }
    /**
     * @param int $totalTime
     *
     * @return self
     */
    public function setTotalTime($totalTime = null)
    {
        $this->totalTime = $totalTime;
        return $this;
    }
    /**
     * @return Leader
     */
    public function getLeader()
    {
        return $this->leader;
    }
    /**
     * @param Leader $leader
     *
     * @return self
     */
    public function setLeader(Leader $leader = null)
    {
        $this->leader = $leader;
        return $this;
    }
    /**
     * @return Collaborator[]
     */
    public function getCollaborators()
    {
        return $this->collaborators;
    }
    /**
     * @param Collaborator[] $collaborators
     *
     * @return self
     */
    public function setCollaborators(array $collaborators = null)
    {
        $this->collaborators = $collaborators;
        return $this;
    }
    /**
     * @return Theme
     */
    public function getTheme()
    {
        return $this->theme;
    }
    /**
     * @param Theme $theme
     *
     * @return self
     */
    public function setTheme(Theme $theme = null)
    {
        $this->theme = $theme;
        return $this;
    }
}