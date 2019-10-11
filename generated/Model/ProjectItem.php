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
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getElementId(): ?int
    {
        return $this->elementId;
    }

    /**
     * @param int|null $elementId
     *
     * @return self
     */
    public function setElementId(?int $elementId): self
    {
        $this->elementId = $elementId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSignable(): ?bool
    {
        return $this->signable;
    }

    /**
     * @param bool|null $signable
     *
     * @return self
     */
    public function setSignable(?bool $signable): self
    {
        $this->signable = $signable;

        return $this;
    }

    /**
     * @return Item|null
     */
    public function getItem(): ?Item
    {
        return $this->item;
    }

    /**
     * @param Item|null $item
     *
     * @return self
     */
    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }
}
