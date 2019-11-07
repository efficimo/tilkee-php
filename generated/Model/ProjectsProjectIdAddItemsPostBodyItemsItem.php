<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectsProjectIdAddItemsPostBodyItemsItem
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var bool|null
     */
    protected $signable;
    /**
     * @var bool|null
     */
    protected $downloadable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSignable(): ?bool
    {
        return $this->signable;
    }

    public function setSignable(?bool $signable): self
    {
        $this->signable = $signable;

        return $this;
    }

    public function getDownloadable(): ?bool
    {
        return $this->downloadable;
    }

    public function setDownloadable(?bool $downloadable): self
    {
        $this->downloadable = $downloadable;

        return $this;
    }
}
