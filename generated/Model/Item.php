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
    public function getUsable(): ?bool
    {
        return $this->usable;
    }

    /**
     * @param bool|null $usable
     *
     * @return self
     */
    public function setUsable(?bool $usable): self
    {
        $this->usable = $usable;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    /**
     * @param string|null $elementType
     *
     * @return self
     */
    public function setElementType(?string $elementType): self
    {
        $this->elementType = $elementType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }

    /**
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

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
     * @return string|null
     */
    public function getS3Url(): ?string
    {
        return $this->s3Url;
    }

    /**
     * @param string|null $s3Url
     *
     * @return self
     */
    public function setS3Url(?string $s3Url): self
    {
        $this->s3Url = $s3Url;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    /**
     * @param string|null $contentUrl
     *
     * @return self
     */
    public function setContentUrl(?string $contentUrl): self
    {
        $this->contentUrl = $contentUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getThumbnailUrl(): ?string
    {
        return $this->thumbnailUrl;
    }

    /**
     * @param string|null $thumbnailUrl
     *
     * @return self
     */
    public function setThumbnailUrl(?string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    /**
     * @param bool|null $visible
     *
     * @return self
     */
    public function setVisible(?bool $visible): self
    {
        $this->visible = $visible;

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
}
