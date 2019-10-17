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
     * @return bool|null
     */
    public function getDownloadable(): ?bool
    {
        return $this->downloadable;
    }

    /**
     * @param bool|null $downloadable
     *
     * @return self
     */
    public function setDownloadable(?bool $downloadable): self
    {
        $this->downloadable = $downloadable;

        return $this;
    }
}
