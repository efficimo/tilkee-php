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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Date to choose when a project is archived (only if company has right « end_date_option »).
     */
    public function getArchivedAt(): ?string
    {
        return $this->archivedAt;
    }

    /**
     * Date to choose when a project is archived (only if company has right « end_date_option »).
     */
    public function setArchivedAt(?string $archivedAt): self
    {
        $this->archivedAt = $archivedAt;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getWon(): ?string
    {
        return $this->won;
    }

    public function setWon(?string $won): self
    {
        $this->won = $won;

        return $this;
    }

    public function getIsTemplate(): ?bool
    {
        return $this->isTemplate;
    }

    public function setIsTemplate(?bool $isTemplate): self
    {
        $this->isTemplate = $isTemplate;

        return $this;
    }

    /**
     * To choose if visitor can download all of the project (only if company have right « download_option »).
     */
    public function getCanBeDownladed(): ?bool
    {
        return $this->canBeDownladed;
    }

    /**
     * To choose if visitor can download all of the project (only if company have right « download_option »).
     */
    public function setCanBeDownladed(?bool $canBeDownladed): self
    {
        $this->canBeDownladed = $canBeDownladed;

        return $this;
    }

    public function getPreview(): ?string
    {
        return $this->preview;
    }

    public function setPreview(?string $preview): self
    {
        $this->preview = $preview;

        return $this;
    }

    public function getPreviewNew(): ?string
    {
        return $this->previewNew;
    }

    public function setPreviewNew(?string $previewNew): self
    {
        $this->previewNew = $previewNew;

        return $this;
    }

    /**
     * Used only for templates, you can create projects from this template that will expire  days later.
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * Used only for templates, you can create projects from this template that will expire  days later.
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getIsOrWasSignable(): ?bool
    {
        return $this->isOrWasSignable;
    }

    public function setIsOrWasSignable(?bool $isOrWasSignable): self
    {
        $this->isOrWasSignable = $isOrWasSignable;

        return $this;
    }

    public function getSigned(): ?bool
    {
        return $this->signed;
    }

    public function setSigned(?bool $signed): self
    {
        $this->signed = $signed;

        return $this;
    }

    public function getStarred(): ?bool
    {
        return $this->starred;
    }

    public function setStarred(?bool $starred): self
    {
        $this->starred = $starred;

        return $this;
    }

    /**
     * ID of the project in your system.
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * ID of the project in your system.
     */
    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getTokenUrl(): ?string
    {
        return $this->tokenUrl;
    }

    public function setTokenUrl(?string $tokenUrl): self
    {
        $this->tokenUrl = $tokenUrl;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getCollaboratorsCount(): ?int
    {
        return $this->collaboratorsCount;
    }

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
     */
    public function setFirstAccessAt($firstAccessAt): self
    {
        $this->firstAccessAt = $firstAccessAt;

        return $this;
    }

    public function getConsultable(): ?bool
    {
        return $this->consultable;
    }

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
     */
    public function setIframes($iframes): self
    {
        $this->iframes = $iframes;

        return $this;
    }

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
