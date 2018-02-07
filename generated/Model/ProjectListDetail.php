<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectListDetail
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
     * @var string
     */
    protected $leaderFirstName;
    /**
     * @var string
     */
    protected $leaderLastName;
    /**
     * @var int
     */
    protected $leaderId;
    /**
     * @var string
     */
    protected $leaderAvatar;
    /**
     * @var int
     */
    protected $tokensCount;
    /**
     * @var int
     */
    protected $projectItemsCount;
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
     * @return string
     */
    public function getLeaderFirstName()
    {
        return $this->leaderFirstName;
    }
    /**
     * @param string $leaderFirstName
     *
     * @return self
     */
    public function setLeaderFirstName($leaderFirstName = null)
    {
        $this->leaderFirstName = $leaderFirstName;
        return $this;
    }
    /**
     * @return string
     */
    public function getLeaderLastName()
    {
        return $this->leaderLastName;
    }
    /**
     * @param string $leaderLastName
     *
     * @return self
     */
    public function setLeaderLastName($leaderLastName = null)
    {
        $this->leaderLastName = $leaderLastName;
        return $this;
    }
    /**
     * @return int
     */
    public function getLeaderId()
    {
        return $this->leaderId;
    }
    /**
     * @param int $leaderId
     *
     * @return self
     */
    public function setLeaderId($leaderId = null)
    {
        $this->leaderId = $leaderId;
        return $this;
    }
    /**
     * @return string
     */
    public function getLeaderAvatar()
    {
        return $this->leaderAvatar;
    }
    /**
     * @param string $leaderAvatar
     *
     * @return self
     */
    public function setLeaderAvatar($leaderAvatar = null)
    {
        $this->leaderAvatar = $leaderAvatar;
        return $this;
    }
    /**
     * @return int
     */
    public function getTokensCount()
    {
        return $this->tokensCount;
    }
    /**
     * @param int $tokensCount
     *
     * @return self
     */
    public function setTokensCount($tokensCount = null)
    {
        $this->tokensCount = $tokensCount;
        return $this;
    }
    /**
     * @return int
     */
    public function getProjectItemsCount()
    {
        return $this->projectItemsCount;
    }
    /**
     * @param int $projectItemsCount
     *
     * @return self
     */
    public function setProjectItemsCount($projectItemsCount = null)
    {
        $this->projectItemsCount = $projectItemsCount;
        return $this;
    }
}