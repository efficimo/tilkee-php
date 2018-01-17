<?php

namespace Tilkee\API\Model;

class UploadInformation
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $acl;
    /**
     * @var string
     */
    protected $policy;
    /**
     * @var string
     */
    protected $signature;
    /**
     * @var string
     */
    protected $aWSAccessKeyId;
    /**
     * @var string
     */
    protected $successActionStatus;
    /**
     * @var string
     */
    protected $s3Endpoint;
    /**
     * @var string
     */
    protected $name;
    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * @param string $key
     *
     * @return self
     */
    public function setKey($key = null)
    {
        $this->key = $key;
        return $this;
    }
    /**
     * @return string
     */
    public function getAcl()
    {
        return $this->acl;
    }
    /**
     * @param string $acl
     *
     * @return self
     */
    public function setAcl($acl = null)
    {
        $this->acl = $acl;
        return $this;
    }
    /**
     * @return string
     */
    public function getPolicy()
    {
        return $this->policy;
    }
    /**
     * @param string $policy
     *
     * @return self
     */
    public function setPolicy($policy = null)
    {
        $this->policy = $policy;
        return $this;
    }
    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }
    /**
     * @param string $signature
     *
     * @return self
     */
    public function setSignature($signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
    /**
     * @return string
     */
    public function getAWSAccessKeyId()
    {
        return $this->aWSAccessKeyId;
    }
    /**
     * @param string $aWSAccessKeyId
     *
     * @return self
     */
    public function setAWSAccessKeyId($aWSAccessKeyId = null)
    {
        $this->aWSAccessKeyId = $aWSAccessKeyId;
        return $this;
    }
    /**
     * @return string
     */
    public function getSuccessActionStatus()
    {
        return $this->successActionStatus;
    }
    /**
     * @param string $successActionStatus
     *
     * @return self
     */
    public function setSuccessActionStatus($successActionStatus = null)
    {
        $this->successActionStatus = $successActionStatus;
        return $this;
    }
    /**
     * @return string
     */
    public function getS3Endpoint()
    {
        return $this->s3Endpoint;
    }
    /**
     * @param string $s3Endpoint
     *
     * @return self
     */
    public function setS3Endpoint($s3Endpoint = null)
    {
        $this->s3Endpoint = $s3Endpoint;
        return $this;
    }
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
}