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

    public function getShouldReceiveEmails(): ?bool
    {
        return $this->shouldReceiveEmails;
    }

    public function setShouldReceiveEmails(?bool $shouldReceiveEmails): self
    {
        $this->shouldReceiveEmails = $shouldReceiveEmails;

        return $this;
    }

    public function getShouldReceiveConnexionEmail(): ?bool
    {
        return $this->shouldReceiveConnexionEmail;
    }

    public function setShouldReceiveConnexionEmail(?bool $shouldReceiveConnexionEmail): self
    {
        $this->shouldReceiveConnexionEmail = $shouldReceiveConnexionEmail;

        return $this;
    }

    public function getCsvRateLimit(): ?int
    {
        return $this->csvRateLimit;
    }

    public function setCsvRateLimit(?int $csvRateLimit): self
    {
        $this->csvRateLimit = $csvRateLimit;

        return $this;
    }

    public function getReceiveDefaultNotifContactEmail(): ?bool
    {
        return $this->receiveDefaultNotifContactEmail;
    }

    public function setReceiveDefaultNotifContactEmail(?bool $receiveDefaultNotifContactEmail): self
    {
        $this->receiveDefaultNotifContactEmail = $receiveDefaultNotifContactEmail;

        return $this;
    }

    public function getHasDefaultPointer(): ?bool
    {
        return $this->hasDefaultPointer;
    }

    public function setHasDefaultPointer(?bool $hasDefaultPointer): self
    {
        $this->hasDefaultPointer = $hasDefaultPointer;

        return $this;
    }

    public function getLegalOverlayRights(): ?bool
    {
        return $this->legalOverlayRights;
    }

    public function setLegalOverlayRights(?bool $legalOverlayRights): self
    {
        $this->legalOverlayRights = $legalOverlayRights;

        return $this;
    }

    public function getRetention(): ?bool
    {
        return $this->retention;
    }

    public function setRetention(?bool $retention): self
    {
        $this->retention = $retention;

        return $this;
    }

    public function getRetentionDelay(): ?int
    {
        return $this->retentionDelay;
    }

    public function setRetentionDelay(?int $retentionDelay): self
    {
        $this->retentionDelay = $retentionDelay;

        return $this;
    }
}
