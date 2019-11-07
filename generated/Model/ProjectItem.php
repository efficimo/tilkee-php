<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectItem
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var int|null
     */
    protected $elementId;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var bool|null
     */
    protected $signable;
    /**
     * @var Item|null
     */
    protected $item;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getElementId(): ?int
    {
        return $this->elementId;
    }

    public function setElementId(?int $elementId): self
    {
        $this->elementId = $elementId;

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

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }
}
