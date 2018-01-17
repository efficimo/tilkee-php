<?php

namespace Tilkee\API\Model;

class UserProfile
{
    /**
     * @var bool
     */
    protected $shouldReceiveEmails;
    /**
     * @var bool
     */
    protected $shouldReceiveConnexionEmail;
    /**
     * @var int
     */
    protected $csvRateLimit;
    /**
     * @var bool
     */
    protected $receiveDefaultNotifContactEmail;
    /**
     * @var bool
     */
    protected $hasDefaultPointer;
    /**
     * @var bool
     */
    protected $legalOverlayRights;
    /**
     * @var bool
     */
    protected $retention;
    /**
     * @var int
     */
    protected $retentionDelay;
    /**
     * @return bool
     */
    public function getShouldReceiveEmails()
    {
        return $this->shouldReceiveEmails;
    }
    /**
     * @param bool $shouldReceiveEmails
     *
     * @return self
     */
    public function setShouldReceiveEmails($shouldReceiveEmails = null)
    {
        $this->shouldReceiveEmails = $shouldReceiveEmails;
        return $this;
    }
    /**
     * @return bool
     */
    public function getShouldReceiveConnexionEmail()
    {
        return $this->shouldReceiveConnexionEmail;
    }
    /**
     * @param bool $shouldReceiveConnexionEmail
     *
     * @return self
     */
    public function setShouldReceiveConnexionEmail($shouldReceiveConnexionEmail = null)
    {
        $this->shouldReceiveConnexionEmail = $shouldReceiveConnexionEmail;
        return $this;
    }
    /**
     * @return int
     */
    public function getCsvRateLimit()
    {
        return $this->csvRateLimit;
    }
    /**
     * @param int $csvRateLimit
     *
     * @return self
     */
    public function setCsvRateLimit($csvRateLimit = null)
    {
        $this->csvRateLimit = $csvRateLimit;
        return $this;
    }
    /**
     * @return bool
     */
    public function getReceiveDefaultNotifContactEmail()
    {
        return $this->receiveDefaultNotifContactEmail;
    }
    /**
     * @param bool $receiveDefaultNotifContactEmail
     *
     * @return self
     */
    public function setReceiveDefaultNotifContactEmail($receiveDefaultNotifContactEmail = null)
    {
        $this->receiveDefaultNotifContactEmail = $receiveDefaultNotifContactEmail;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHasDefaultPointer()
    {
        return $this->hasDefaultPointer;
    }
    /**
     * @param bool $hasDefaultPointer
     *
     * @return self
     */
    public function setHasDefaultPointer($hasDefaultPointer = null)
    {
        $this->hasDefaultPointer = $hasDefaultPointer;
        return $this;
    }
    /**
     * @return bool
     */
    public function getLegalOverlayRights()
    {
        return $this->legalOverlayRights;
    }
    /**
     * @param bool $legalOverlayRights
     *
     * @return self
     */
    public function setLegalOverlayRights($legalOverlayRights = null)
    {
        $this->legalOverlayRights = $legalOverlayRights;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRetention()
    {
        return $this->retention;
    }
    /**
     * @param bool $retention
     *
     * @return self
     */
    public function setRetention($retention = null)
    {
        $this->retention = $retention;
        return $this;
    }
    /**
     * @return int
     */
    public function getRetentionDelay()
    {
        return $this->retentionDelay;
    }
    /**
     * @param int $retentionDelay
     *
     * @return self
     */
    public function setRetentionDelay($retentionDelay = null)
    {
        $this->retentionDelay = $retentionDelay;
        return $this;
    }
}