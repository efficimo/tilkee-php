<?php

namespace HbsResearch\Tilkee\API\Model;

class WrapperTokenFromFilesPostBodyDocumentsItem
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $s3Url;
    /**
     * @var bool|null
     */
    protected $signable = false;
    /**
     * @var bool|null
     */
    protected $downloadable = false;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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
