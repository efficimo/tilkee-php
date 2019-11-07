<?php

namespace HbsResearch\Tilkee\API\Model;

class ItemUpdate
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
    protected $usable = true;
    /**
     * @var bool|null
     */
    protected $favorite = false;
    /**
     * @var ItemUpdateSharedAttributes|null
     */
    protected $sharedAttributes;
    /**
     * @var mixed[]|null
     */
    protected $tags = [];
    /**
     * @var bool|null
     */
    protected $visible = false;

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

    public function getUsable(): ?bool
    {
        return $this->usable;
    }

    public function setUsable(?bool $usable): self
    {
        $this->usable = $usable;

        return $this;
    }

    public function getFavorite(): ?bool
    {
        return $this->favorite;
    }

    public function setFavorite(?bool $favorite): self
    {
        $this->favorite = $favorite;

        return $this;
    }

    public function getSharedAttributes(): ?ItemUpdateSharedAttributes
    {
        return $this->sharedAttributes;
    }

    public function setSharedAttributes(?ItemUpdateSharedAttributes $sharedAttributes): self
    {
        $this->sharedAttributes = $sharedAttributes;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param mixed[]|null $tags
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }
}
