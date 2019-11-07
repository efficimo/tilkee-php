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

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getAcl(): ?string
    {
        return $this->acl;
    }

    public function setAcl(?string $acl): self
    {
        $this->acl = $acl;

        return $this;
    }

    public function getPolicy(): ?string
    {
        return $this->policy;
    }

    public function setPolicy(?string $policy): self
    {
        $this->policy = $policy;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function getAWSAccessKeyId(): ?string
    {
        return $this->aWSAccessKeyId;
    }

    public function setAWSAccessKeyId(?string $aWSAccessKeyId): self
    {
        $this->aWSAccessKeyId = $aWSAccessKeyId;

        return $this;
    }

    public function getSuccessActionStatus(): ?string
    {
        return $this->successActionStatus;
    }

    public function setSuccessActionStatus(?string $successActionStatus): self
    {
        $this->successActionStatus = $successActionStatus;

        return $this;
    }

    public function getS3Endpoint(): ?string
    {
        return $this->s3Endpoint;
    }

    public function setS3Endpoint(?string $s3Endpoint): self
    {
        $this->s3Endpoint = $s3Endpoint;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
