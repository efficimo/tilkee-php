<?php

namespace HbsResearch\Tilkee\API\Model;

class InputItem
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var string|null
     */
    protected $content;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var bool|null
     */
    protected $fromUrl;
    /**
     * @var string|null
     */
    protected $s3Url;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $externalId;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getFromUrl(): ?bool
    {
        return $this->fromUrl;
    }

    public function setFromUrl(?bool $fromUrl): self
    {
        $this->fromUrl = $fromUrl;

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
}
