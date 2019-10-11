<?php

namespace HbsResearch\Tilkee\API\Model;

class UploadInformation
{
    /**
     * @var string|null
     */
    protected $key;
    /**
     * @var string|null
     */
    protected $acl;
    /**
     * @var string|null
     */
    protected $policy;
    /**
     * @var string|null
     */
    protected $signature;
    /**
     * @var string|null
     */
    protected $aWSAccessKeyId;
    /**
     * @var string|null
     */
    protected $successActionStatus;
    /**
     * @var string|null
     */
    protected $s3Endpoint;
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcl(): ?string
    {
        return $this->acl;
    }

    /**
     * @param string|null $acl
     *
     * @return self
     */
    public function setAcl(?string $acl): self
    {
        $this->acl = $acl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPolicy(): ?string
    {
        return $this->policy;
    }

    /**
     * @param string|null $policy
     *
     * @return self
     */
    public function setPolicy(?string $policy): self
    {
        $this->policy = $policy;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * @param string|null $signature
     *
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAWSAccessKeyId(): ?string
    {
        return $this->aWSAccessKeyId;
    }

    /**
     * @param string|null $aWSAccessKeyId
     *
     * @return self
     */
    public function setAWSAccessKeyId(?string $aWSAccessKeyId): self
    {
        $this->aWSAccessKeyId = $aWSAccessKeyId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSuccessActionStatus(): ?string
    {
        return $this->successActionStatus;
    }

    /**
     * @param string|null $successActionStatus
     *
     * @return self
     */
    public function setSuccessActionStatus(?string $successActionStatus): self
    {
        $this->successActionStatus = $successActionStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getS3Endpoint(): ?string
    {
        return $this->s3Endpoint;
    }

    /**
     * @param string|null $s3Endpoint
     *
     * @return self
     */
    public function setS3Endpoint(?string $s3Endpoint): self
    {
        $this->s3Endpoint = $s3Endpoint;

        return $this;
    }

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
}
