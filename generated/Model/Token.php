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

    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getConsulted(): ?bool
    {
        return $this->consulted;
    }

    public function setConsulted(?bool $consulted): self
    {
        $this->consulted = $consulted;

        return $this;
    }

    public function getSignedStatus(): ?string
    {
        return $this->signedStatus;
    }

    public function setSignedStatus(?string $signedStatus): self
    {
        $this->signedStatus = $signedStatus;

        return $this;
    }

    public function getArchivedAt(): ?\DateTime
    {
        return $this->archivedAt;
    }

    public function setArchivedAt(?\DateTime $archivedAt): self
    {
        $this->archivedAt = $archivedAt;

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

    /**
     * @return TokenSignedDocsItem[]|null
     */
    public function getSignedDocs(): ?array
    {
        return $this->signedDocs;
    }

    /**
     * @param TokenSignedDocsItem[]|null $signedDocs
     */
    public function setSignedDocs(?array $signedDocs): self
    {
        $this->signedDocs = $signedDocs;

        return $this;
    }

    public function getInterest(): ?int
    {
        return $this->interest;
    }

    public function setInterest(?int $interest): self
    {
        $this->interest = $interest;

        return $this;
    }

    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->previewUrl = $previewUrl;

        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getGeneratedByProspect(): ?bool
    {
        return $this->generatedByProspect;
    }

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
     */
    public function setFirstAccessAt($firstAccessAt): self
    {
        $this->firstAccessAt = $firstAccessAt;

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

    public function getLastSignInAt(): ?\DateTime
    {
        return $this->lastSignInAt;
    }

    public function setLastSignInAt(?\DateTime $lastSignInAt): self
    {
        $this->lastSignInAt = $lastSignInAt;

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
}
