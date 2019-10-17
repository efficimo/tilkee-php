<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectsProjectIdDuplicatePostBody
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * To choose if visitor can download all of the project (only if company have right « download_option »).
     *
     * @var bool|null
     */
    protected $canBeDownloaded;
    /**
     * Date to choose when a project is archived (only if company has right « end_date_option »).
     *
     * @var string|null
     */
    protected $archivedAt;
    /**
     * To choose if project assignments should be kept.
     *
     * @var bool|null
     */
    protected $shouldDuplicateAssignments;

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
     * To choose if visitor can download all of the project (only if company have right « download_option »).
     *
     * @return bool|null
     */
    public function getCanBeDownloaded(): ?bool
    {
        return $this->canBeDownloaded;
    }

    /**
     * To choose if visitor can download all of the project (only if company have right « download_option »).
     *
     * @param bool|null $canBeDownloaded
     *
     * @return self
     */
    public function setCanBeDownloaded(?bool $canBeDownloaded): self
    {
        $this->canBeDownloaded = $canBeDownloaded;

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
     * To choose if project assignments should be kept.
     *
     * @return bool|null
     */
    public function getShouldDuplicateAssignments(): ?bool
    {
        return $this->shouldDuplicateAssignments;
    }

    /**
     * To choose if project assignments should be kept.
     *
     * @param bool|null $shouldDuplicateAssignments
     *
     * @return self
     */
    public function setShouldDuplicateAssignments(?bool $shouldDuplicateAssignments): self
    {
        $this->shouldDuplicateAssignments = $shouldDuplicateAssignments;

        return $this;
    }
}
