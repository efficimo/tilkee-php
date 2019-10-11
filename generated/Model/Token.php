<?php

namespace HbsResearch\Tilkee\API\Model;

class Token
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
     * @var string|null
     */
    protected $projectName;
    /**
     * @var string|null
     */
    protected $link;
    /**
     * @var string|null
     */
    protected $won;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * @var bool|null
     */
    protected $consulted = false;
    /**
     * @var string|null
     */
    protected $signedStatus;
    /**
     * @var \DateTime|null
     */
    protected $archivedAt;
    /**
     * @var bool|null
     */
    protected $signed = false;
    /**
     * @var TokenSignedDocsItem[]|null
     */
    protected $signedDocs;
    /**
     * @var int|null
     */
    protected $interest;
    /**
     * @var int|null
     */
    protected $projectId;
    /**
     * @var string|null
     */
    protected $previewUrl;
    /**
     * @var string|null
     */
    protected $externalId;
    /**
     * @var bool|null
     */
    protected $generatedByProspect;
    /**
     * @var mixed|null
     */
    protected $firstAccessAt;
    /**
     * @var int|null
     */
    protected $totalTime;
    /**
     * @var \DateTime|null
     */
    protected $lastSignInAt;
    /**
     * @var int|null
     */
    protected $nbConnections;

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
     * @return string|null
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * @param string|null $projectName
     *
     * @return self
     */
    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string|null $link
     *
     * @return self
     */
    public function setLink(?string $link): self
    {
        $this->link = $link;

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
     * @return bool|null
     */
    public function getConsulted(): ?bool
    {
        return $this->consulted;
    }

    /**
     * @param bool|null $consulted
     *
     * @return self
     */
    public function setConsulted(?bool $consulted): self
    {
        $this->consulted = $consulted;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSignedStatus(): ?string
    {
        return $this->signedStatus;
    }

    /**
     * @param string|null $signedStatus
     *
     * @return self
     */
    public function setSignedStatus(?string $signedStatus): self
    {
        $this->signedStatus = $signedStatus;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getArchivedAt(): ?\DateTime
    {
        return $this->archivedAt;
    }

    /**
     * @param \DateTime|null $archivedAt
     *
     * @return self
     */
    public function setArchivedAt(?\DateTime $archivedAt): self
    {
        $this->archivedAt = $archivedAt;

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
     * @return TokenSignedDocsItem[]|null
     */
    public function getSignedDocs(): ?array
    {
        return $this->signedDocs;
    }

    /**
     * @param TokenSignedDocsItem[]|null $signedDocs
     *
     * @return self
     */
    public function setSignedDocs(?array $signedDocs): self
    {
        $this->signedDocs = $signedDocs;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getInterest(): ?int
    {
        return $this->interest;
    }

    /**
     * @param int|null $interest
     *
     * @return self
     */
    public function setInterest(?int $interest): self
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    /**
     * @param string|null $previewUrl
     *
     * @return self
     */
    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->previewUrl = $previewUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
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
     * @return bool|null
     */
    public function getGeneratedByProspect(): ?bool
    {
        return $this->generatedByProspect;
    }

    /**
     * @param bool|null $generatedByProspect
     *
     * @return self
     */
    public function setGeneratedByProspect(?bool $generatedByProspect): self
    {
        $this->generatedByProspect = $generatedByProspect;

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
     * @return \DateTime|null
     */
    public function getLastSignInAt(): ?\DateTime
    {
        return $this->lastSignInAt;
    }

    /**
     * @param \DateTime|null $lastSignInAt
     *
     * @return self
     */
    public function setLastSignInAt(?\DateTime $lastSignInAt): self
    {
        $this->lastSignInAt = $lastSignInAt;

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
}
