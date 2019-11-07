<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectListDetail
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
     * @var string|null
     */
    protected $leaderFirstName;
    /**
     * @var string|null
     */
    protected $leaderLastName;
    /**
     * @var int|null
     */
    protected $leaderId;
    /**
     * @var string|null
     */
    protected $leaderAvatar;
    /**
     * @var int|null
     */
    protected $tokensCount;
    /**
     * @var int|null
     */
    protected $projectItemsCount;

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

    public function getLeaderFirstName(): ?string
    {
        return $this->leaderFirstName;
    }

    public function setLeaderFirstName(?string $leaderFirstName): self
    {
        $this->leaderFirstName = $leaderFirstName;

        return $this;
    }

    public function getLeaderLastName(): ?string
    {
        return $this->leaderLastName;
    }

    public function setLeaderLastName(?string $leaderLastName): self
    {
        $this->leaderLastName = $leaderLastName;

        return $this;
    }

    public function getLeaderId(): ?int
    {
        return $this->leaderId;
    }

    public function setLeaderId(?int $leaderId): self
    {
        $this->leaderId = $leaderId;

        return $this;
    }

    public function getLeaderAvatar(): ?string
    {
        return $this->leaderAvatar;
    }

    public function setLeaderAvatar(?string $leaderAvatar): self
    {
        $this->leaderAvatar = $leaderAvatar;

        return $this;
    }

    public function getTokensCount(): ?int
    {
        return $this->tokensCount;
    }

    public function setTokensCount(?int $tokensCount): self
    {
        $this->tokensCount = $tokensCount;

        return $this;
    }

    public function getProjectItemsCount(): ?int
    {
        return $this->projectItemsCount;
    }

    public function setProjectItemsCount(?int $projectItemsCount): self
    {
        $this->projectItemsCount = $projectItemsCount;

        return $this;
    }
}
