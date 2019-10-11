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
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFromUrl(): ?bool
    {
        return $this->fromUrl;
    }

    /**
     * @param bool|null $fromUrl
     *
     * @return self
     */
    public function setFromUrl(?bool $fromUrl): self
    {
        $this->fromUrl = $fromUrl;

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
}
