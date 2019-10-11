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
     * @return string|null
     */
    public function getLeaderFirstName(): ?string
    {
        return $this->leaderFirstName;
    }

    /**
     * @param string|null $leaderFirstName
     *
     * @return self
     */
    public function setLeaderFirstName(?string $leaderFirstName): self
    {
        $this->leaderFirstName = $leaderFirstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLeaderLastName(): ?string
    {
        return $this->leaderLastName;
    }

    /**
     * @param string|null $leaderLastName
     *
     * @return self
     */
    public function setLeaderLastName(?string $leaderLastName): self
    {
        $this->leaderLastName = $leaderLastName;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLeaderId(): ?int
    {
        return $this->leaderId;
    }

    /**
     * @param int|null $leaderId
     *
     * @return self
     */
    public function setLeaderId(?int $leaderId): self
    {
        $this->leaderId = $leaderId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLeaderAvatar(): ?string
    {
        return $this->leaderAvatar;
    }

    /**
     * @param string|null $leaderAvatar
     *
     * @return self
     */
    public function setLeaderAvatar(?string $leaderAvatar): self
    {
        $this->leaderAvatar = $leaderAvatar;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTokensCount(): ?int
    {
        return $this->tokensCount;
    }

    /**
     * @param int|null $tokensCount
     *
     * @return self
     */
    public function setTokensCount(?int $tokensCount): self
    {
        $this->tokensCount = $tokensCount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProjectItemsCount(): ?int
    {
        return $this->projectItemsCount;
    }

    /**
     * @param int|null $projectItemsCount
     *
     * @return self
     */
    public function setProjectItemsCount(?int $projectItemsCount): self
    {
        $this->projectItemsCount = $projectItemsCount;

        return $this;
    }
}
