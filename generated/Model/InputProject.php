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
}
