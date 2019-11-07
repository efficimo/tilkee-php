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

    public function getNbConnections(): ?int
    {
        return $this->nbConnections;
    }

    public function setNbConnections(?int $nbConnections): self
    {
        $this->nbConnections = $nbConnections;

        return $this;
    }

    public function getTotalTime(): ?int
    {
        return $this->totalTime;
    }

    public function setTotalTime(?int $totalTime): self
    {
        $this->totalTime = $totalTime;

        return $this;
    }

    public function getLeader(): ?Leader
    {
        return $this->leader;
    }

    public function setLeader(?Leader $leader): self
    {
        $this->leader = $leader;

        return $this;
    }

    public function getData(): ?ProjectData
    {
        return $this->data;
    }

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
     */
    public function setCollaborators(?array $collaborators): self
    {
        $this->collaborators = $collaborators;

        return $this;
    }

    public function getTheme(): ?Theme
    {
        return $this->theme;
    }

    public function setTheme(?Theme $theme): self
    {
        $this->theme = $theme;

        return $this;
    }
}
