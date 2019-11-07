<?php

namespace HbsResearch\Tilkee\API\Model;

class InputProject
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * Date to choose when a project is archived (only if company has right « end_date_option »).
     *
     * @var string|null
     */
    protected $archivedAt;
    /**
     * To choose if visitor can download all of the project (only if company have right « download_option »).
     *
     * @var bool|null
     */
    protected $canBeDownladed;
    /**
     * ID of the project in your system.
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * Used only for templates, you can create projects from this template that will expire  days later.
     *
     * @var int|null
     */
    protected $duration;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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
}
