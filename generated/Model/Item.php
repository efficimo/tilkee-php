<?php

namespace HbsResearch\Tilkee\API\Model;

class Item
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
    protected $usable;
    /**
     * @var string|null
     */
    protected $elementType;
    /**
     * @var string|null
     */
    protected $extension;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $externalId;
    /**
     * @var string|null
     */
    protected $s3Url;
    /**
     * @var string|null
     */
    protected $contentUrl;
    /**
     * @var string|null
     */
    protected $thumbnailUrl;
    /**
     * @var bool|null
     */
    protected $visible;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;

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

    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    public function setElementType(?string $elementType): self
    {
        $this->elementType = $elementType;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

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

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getS3Url(): ?string
    {
        return $this->s3Url;
    }

    public function setS3Url(?string $s3Url): self
    {
        $this->s3Url = $s3Url;

        return $this;
    }

    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    public function setContentUrl(?string $contentUrl): self
    {
        $this->contentUrl = $contentUrl;

        return $this;
    }

    public function getThumbnailUrl(): ?string
    {
        return $this->thumbnailUrl;
    }

    public function setThumbnailUrl(?string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
