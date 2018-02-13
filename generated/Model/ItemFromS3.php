<?php

namespace HbsResearch\Tilkee\API\Model;

class ItemFromS3
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $fromUrl;
    /**
     * @var string
     */
    protected $s3Url;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return bool
     */
    public function getFromUrl()
    {
        return $this->fromUrl;
    }
    /**
     * @param bool $fromUrl
     *
     * @return self
     */
    public function setFromUrl($fromUrl = null)
    {
        $this->fromUrl = $fromUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getS3Url()
    {
        return $this->s3Url;
    }
    /**
     * @param string $s3Url
     *
     * @return self
     */
    public function setS3Url($s3Url = null)
    {
        $this->s3Url = $s3Url;
        return $this;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }
    /**
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId($externalId = null)
    {
        $this->externalId = $externalId;
        return $this;
    }
}