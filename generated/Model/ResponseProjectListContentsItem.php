<?php

namespace HbsResearch\Tilkee\API\Model;

class ResponseProjectListContentsItem
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Date to choose when a project is archived (only if company has right « end_date_option »).
     *
     * @var string|null
     */
    protected $archivedAt;
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $won;
    /**
     * @var bool|null
     */
    protected $isTemplate;
    /**
     * To choose if visitor can download all of the project (only if company have right « download_option »).
     *
     * @var bool|null
     */
    protected $canBeDownladed;
    /**
     * @var string|null
     */
    protected $preview;
    /**
     * @var string|null
     */
    protected $previewNew;
    /**
     * Used only for templates, you can create projects from this template that will expire  days later.
     *
     * @var int|null
     */
    protected $duration;
    /**
     * @var bool|null
     */
    protected $isOrWasSignable;
    /**
     * @var bool|null
     */
    protected $signed;
    /**
     * @var bool|null
     */
    protected $starred;
    /**
     * ID of the project in your system.
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * @var string|null
     */
    protected $tokenUrl;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var int|null
     */
    protected $collaboratorsCount;
    /**
     * @var mixed|null
     */
    protected $firstAccessAt;
    /**
     * @var bool|null
     */
    protected $consultable;
    /**
     * @var mixed|null
     */
    protected $iframes;
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
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Date to choose when a project is archived (only if company has right « end_date_option »).
     *
     * @return string|null
     */
    public function getArchivedAt(): ?string
    {
        return $this->archivedAt;
    }

    /**
     * Date to choose when a project is archived (only if company has right « end_date_option »).
     *
     * @param string|null $archivedAt
     *
     * @return self
     */
    public function setArchivedAt(?string $archivedAt): self
    {
        $this->archivedAt = $archivedAt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWon(): ?string
    {
        return $this->won;
    }

    /**
     * @param string|null $won
     *
     * @return self
     */
    public function setWon(?string $won): self
    {
        $this->won = $won;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsTemplate(): ?bool
    {
        return $this->isTemplate;
    }

    /**
     * @param bool|null $isTemplate
     *
     * @return self
     */
    public function setIsTemplate(?bool $isTemplate): self
    {
        $this->isTemplate = $isTemplate;

        return $this;
    }

    /**
     * To choose if visitor can download all of the project (only if company have right « download_option »).
     *
     * @return bool|null
     */
    public function getCanBeDownladed(): ?bool
    {
        return $this->canBeDownladed;
    }

    /**
     * To choose if visitor can download all of the project (only if company have right « download_option »).
     *
     * @param bool|null $canBeDownladed
     *
     * @return self
     */
    public function setCanBeDownladed(?bool $canBeDownladed): self
    {
        $this->canBeDownladed = $canBeDownladed;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreview(): ?string
    {
        return $this->preview;
    }

    /**
     * @param string|null $preview
     *
     * @return self
     */
    public function setPreview(?string $preview): self
    {
        $this->preview = $preview;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreviewNew(): ?string
    {
        return $this->previewNew;
    }

    /**
     * @param string|null $previewNew
     *
     * @return self
     */
    public function setPreviewNew(?string $previewNew): self
    {
        $this->previewNew = $previewNew;

        return $this;
    }

    /**
     * Used only for templates, you can create projects from this template that will expire  days later.
     *
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * Used only for templates, you can create projects from this template that will expire  days later.
     *
     * @param int|null $duration
     *
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsOrWasSignable(): ?bool
    {
        return $this->isOrWasSignable;
    }

    /**
     * @param bool|null $isOrWasSignable
     *
     * @return self
     */
    public function setIsOrWasSignable(?bool $isOrWasSignable): self
    {
        $this->isOrWasSignable = $isOrWasSignable;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSigned(): ?bool
    {
        return $this->signed;
    }

    /**
     * @param bool|null $signed
     *
     * @return self
     */
    public function setSigned(?bool $signed): self
    {
        $this->signed = $signed;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getStarred(): ?bool
    {
        return $this->starred;
    }

    /**
     * @param bool|null $starred
     *
     * @return self
     */
    public function setStarred(?bool $starred): self
    {
        $this->starred = $starred;

        return $this;
    }

    /**
     * ID of the project in your system.
     *
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * ID of the project in your system.
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTokenUrl(): ?string
    {
        return $this->tokenUrl;
    }

    /**
     * @param string|null $tokenUrl
     *
     * @return self
     */
    public function setTokenUrl(?string $tokenUrl): self
    {
        $this->tokenUrl = $tokenUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCollaboratorsCount(): ?int
    {
        return $this->collaboratorsCount;
    }

    /**
     * @param int|null $collaboratorsCount
     *
     * @return self
     */
    public function setCollaboratorsCount(?int $collaboratorsCount): self
    {
        $this->collaboratorsCount = $collaboratorsCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstAccessAt()
    {
        return $this->firstAccessAt;
    }

    /**
     * @param mixed $firstAccessAt
     *
     * @return self
     */
    public function setFirstAccessAt($firstAccessAt): self
    {
        $this->firstAccessAt = $firstAccessAt;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getConsultable(): ?bool
    {
        return $this->consultable;
    }

    /**
     * @param bool|null $consultable
     *
     * @return self
     */
    public function setConsultable(?bool $consultable): self
    {
        $this->consultable = $consultable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIframes()
    {
        return $this->iframes;
    }

    /**
     * @param mixed $iframes
     *
     * @return self
     */
    public function setIframes($iframes): self
    {
        $this->iframes = $iframes;

        return $this;
    }

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
