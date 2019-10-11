<?php

namespace HbsResearch\Tilkee\API\Model;

class UserProfile
{
    /**
     * @var bool|null
     */
    protected $shouldReceiveEmails;
    /**
     * @var bool|null
     */
    protected $shouldReceiveConnexionEmail;
    /**
     * @var int|null
     */
    protected $csvRateLimit;
    /**
     * @var bool|null
     */
    protected $receiveDefaultNotifContactEmail;
    /**
     * @var bool|null
     */
    protected $hasDefaultPointer;
    /**
     * @var bool|null
     */
    protected $legalOverlayRights;
    /**
     * @var bool|null
     */
    protected $retention;
    /**
     * @var int|null
     */
    protected $retentionDelay;

    /**
     * @return bool|null
     */
    public function getShouldReceiveEmails(): ?bool
    {
        return $this->shouldReceiveEmails;
    }

    /**
     * @param bool|null $shouldReceiveEmails
     *
     * @return self
     */
    public function setShouldReceiveEmails(?bool $shouldReceiveEmails): self
    {
        $this->shouldReceiveEmails = $shouldReceiveEmails;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getShouldReceiveConnexionEmail(): ?bool
    {
        return $this->shouldReceiveConnexionEmail;
    }

    /**
     * @param bool|null $shouldReceiveConnexionEmail
     *
     * @return self
     */
    public function setShouldReceiveConnexionEmail(?bool $shouldReceiveConnexionEmail): self
    {
        $this->shouldReceiveConnexionEmail = $shouldReceiveConnexionEmail;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCsvRateLimit(): ?int
    {
        return $this->csvRateLimit;
    }

    /**
     * @param int|null $csvRateLimit
     *
     * @return self
     */
    public function setCsvRateLimit(?int $csvRateLimit): self
    {
        $this->csvRateLimit = $csvRateLimit;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getReceiveDefaultNotifContactEmail(): ?bool
    {
        return $this->receiveDefaultNotifContactEmail;
    }

    /**
     * @param bool|null $receiveDefaultNotifContactEmail
     *
     * @return self
     */
    public function setReceiveDefaultNotifContactEmail(?bool $receiveDefaultNotifContactEmail): self
    {
        $this->receiveDefaultNotifContactEmail = $receiveDefaultNotifContactEmail;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasDefaultPointer(): ?bool
    {
        return $this->hasDefaultPointer;
    }

    /**
     * @param bool|null $hasDefaultPointer
     *
     * @return self
     */
    public function setHasDefaultPointer(?bool $hasDefaultPointer): self
    {
        $this->hasDefaultPointer = $hasDefaultPointer;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLegalOverlayRights(): ?bool
    {
        return $this->legalOverlayRights;
    }

    /**
     * @param bool|null $legalOverlayRights
     *
     * @return self
     */
    public function setLegalOverlayRights(?bool $legalOverlayRights): self
    {
        $this->legalOverlayRights = $legalOverlayRights;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRetention(): ?bool
    {
        return $this->retention;
    }

    /**
     * @param bool|null $retention
     *
     * @return self
     */
    public function setRetention(?bool $retention): self
    {
        $this->retention = $retention;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRetentionDelay(): ?int
    {
        return $this->retentionDelay;
    }

    /**
     * @param int|null $retentionDelay
     *
     * @return self
     */
    public function setRetentionDelay(?int $retentionDelay): self
    {
        $this->retentionDelay = $retentionDelay;

        return $this;
    }
}
