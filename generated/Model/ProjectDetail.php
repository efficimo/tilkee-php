<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectDetail
{
    /**
     * @var int|null
     */
    protected $nbConnections;
    /**
     * @var int|null
     */
    protected $totalTime;
    /**
     * @var Leader|null
     */
    protected $leader;
    /**
     * @var ProjectData|null
     */
    protected $data;
    /**
     * @var Collaborator[]|null
     */
    protected $collaborators;
    /**
     * @var Theme|null
     */
    protected $theme;

    /**
     * @return int|null
     */
    public function getNbConnections(): ?int
    {
        return $this->nbConnections;
    }

    /**
     * @param int|null $nbConnections
     *
     * @return self
     */
    public function setNbConnections(?int $nbConnections): self
    {
        $this->nbConnections = $nbConnections;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalTime(): ?int
    {
        return $this->totalTime;
    }

    /**
     * @param int|null $totalTime
     *
     * @return self
     */
    public function setTotalTime(?int $totalTime): self
    {
        $this->totalTime = $totalTime;

        return $this;
    }

    /**
     * @return Leader|null
     */
    public function getLeader(): ?Leader
    {
        return $this->leader;
    }

    /**
     * @param Leader|null $leader
     *
     * @return self
     */
    public function setLeader(?Leader $leader): self
    {
        $this->leader = $leader;

        return $this;
    }

    /**
     * @return ProjectData|null
     */
    public function getData(): ?ProjectData
    {
        return $this->data;
    }

    /**
     * @param ProjectData|null $data
     *
     * @return self
     */
    public function setData(?ProjectData $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return Collaborator[]|null
     */
    public function getCollaborators(): ?array
    {
        return $this->collaborators;
    }

    /**
     * @param Collaborator[]|null $collaborators
     *
     * @return self
     */
    public function setCollaborators(?array $collaborators): self
    {
        $this->collaborators = $collaborators;

        return $this;
    }

    /**
     * @return Theme|null
     */
    public function getTheme(): ?Theme
    {
        return $this->theme;
    }

    /**
     * @param Theme|null $theme
     *
     * @return self
     */
    public function setTheme(?Theme $theme): self
    {
        $this->theme = $theme;

        return $this;
    }
}
