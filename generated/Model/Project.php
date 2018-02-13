<?php

namespace HbsResearch\Tilkee\API\Model;

class Project
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $archivedAt;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $won;
    /**
     * @var bool
     */
    protected $isTemplate;
    /**
     * @var bool
     */
    protected $canBeDownladed;
    /**
     * @var string
     */
    protected $preview;
    /**
     * @var string
     */
    protected $previewNew;
    /**
     * @var int
     */
    protected $duration;
    /**
     * @var bool
     */
    protected $isOrWasSignable;
    /**
     * @var \DateTime|mixed
     */
    protected $lastSignInAt;
    /**
     * @var bool
     */
    protected $signed;
    /**
     * @var bool
     */
    protected $starred;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @var string
     */
    protected $tokenUrl;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var int
     */
    protected $collaboratorsCount;
    /**
     * @var string
     */
    protected $firstAccessAt;
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
     * @var Collaborator[]
     */
    protected $collaborators;
    /**
     * @var Theme
     */
    protected $theme;
    /**
     * @var int
     */
    protected $tokensCount;
    /**
     * @var Token[]
     */
    protected $tokens;
    /**
     * @var int
     */
    protected $projectItemsCount;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
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
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * @return string
     */
    public function getWon()
    {
        return $this->won;
    }
    /**
     * @param string $won
     *
     * @return self
     */
    public function setWon($won = null)
    {
        $this->won = $won;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsTemplate()
    {
        return $this->isTemplate;
    }
    /**
     * @param bool $isTemplate
     *
     * @return self
     */
    public function setIsTemplate($isTemplate = null)
    {
        $this->isTemplate = $isTemplate;
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
    public function getPreview()
    {
        return $this->preview;
    }
    /**
     * @param string $preview
     *
     * @return self
     */
    public function setPreview($preview = null)
    {
        $this->preview = $preview;
        return $this;
    }
    /**
     * @return string
     */
    public function getPreviewNew()
    {
        return $this->previewNew;
    }
    /**
     * @param string $previewNew
     *
     * @return self
     */
    public function setPreviewNew($previewNew = null)
    {
        $this->previewNew = $previewNew;
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
    /**
     * @return bool
     */
    public function getIsOrWasSignable()
    {
        return $this->isOrWasSignable;
    }
    /**
     * @param bool $isOrWasSignable
     *
     * @return self
     */
    public function setIsOrWasSignable($isOrWasSignable = null)
    {
        $this->isOrWasSignable = $isOrWasSignable;
        return $this;
    }
    /**
     * @return \DateTime|mixed
     */
    public function getLastSignInAt()
    {
        return $this->lastSignInAt;
    }
    /**
     * @param \DateTime|mixed $lastSignInAt
     *
     * @return self
     */
    public function setLastSignInAt($lastSignInAt = null)
    {
        $this->lastSignInAt = $lastSignInAt;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSigned()
    {
        return $this->signed;
    }
    /**
     * @param bool $signed
     *
     * @return self
     */
    public function setSigned($signed = null)
    {
        $this->signed = $signed;
        return $this;
    }
    /**
     * @return bool
     */
    public function getStarred()
    {
        return $this->starred;
    }
    /**
     * @param bool $starred
     *
     * @return self
     */
    public function setStarred($starred = null)
    {
        $this->starred = $starred;
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
     * @return string
     */
    public function getTokenUrl()
    {
        return $this->tokenUrl;
    }
    /**
     * @param string $tokenUrl
     *
     * @return self
     */
    public function setTokenUrl($tokenUrl = null)
    {
        $this->tokenUrl = $tokenUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url = null)
    {
        $this->url = $url;
        return $this;
    }
    /**
     * @return int
     */
    public function getCollaboratorsCount()
    {
        return $this->collaboratorsCount;
    }
    /**
     * @param int $collaboratorsCount
     *
     * @return self
     */
    public function setCollaboratorsCount($collaboratorsCount = null)
    {
        $this->collaboratorsCount = $collaboratorsCount;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirstAccessAt()
    {
        return $this->firstAccessAt;
    }
    /**
     * @param string $firstAccessAt
     *
     * @return self
     */
    public function setFirstAccessAt($firstAccessAt = null)
    {
        $this->firstAccessAt = $firstAccessAt;
        return $this;
    }
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
     * @return Token[]
     */
    public function getTokens()
    {
        return $this->tokens;
    }
    /**
     * @param Token[] $tokens
     *
     * @return self
     */
    public function setTokens(array $tokens = null)
    {
        $this->tokens = $tokens;
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