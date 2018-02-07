<?php

namespace HbsResearch\Tilkee\API\Model;

class Leader
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $fullName;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $cellPhoneNumber;
    /**
     * @var string
     */
    protected $phoneNumber;
    /**
     * @var string
     */
    protected $contactEmail;
    /**
     * @var bool
     */
    protected $shouldReceiveEmails;
    /**
     * @var int
     */
    protected $levelId;
    /**
     * @var Device[]
     */
    protected $devices;
    /**
     * @var bool
     */
    protected $isOwner;
    /**
     * @var bool
     */
    protected $isOrangeUser;
    /**
     * @var string
     */
    protected $locale;
    /**
     * @var bool
     */
    protected $shouldReceiveConnexionEmail;
    /**
     * @var int
     */
    protected $frequencyProposalSumupEmail;
    /**
     * @var string
     */
    protected $position;
    /**
     * @var string
     */
    protected $avatar;
    /**
     * @var string
     */
    protected $linkedinAccountUrl;
    /**
     * @var string
     */
    protected $twitterAccountUrl;
    /**
     * @var string
     */
    protected $facebookAccountUrl;
    /**
     * @var int|mixed
     */
    protected $lastSignInAt;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }
    /**
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName($fullName = null)
    {
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellPhoneNumber()
    {
        return $this->cellPhoneNumber;
    }
    /**
     * @param string $cellPhoneNumber
     *
     * @return self
     */
    public function setCellPhoneNumber($cellPhoneNumber = null)
    {
        $this->cellPhoneNumber = $cellPhoneNumber;
        return $this;
    }
    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }
    /**
     * @param string $contactEmail
     *
     * @return self
     */
    public function setContactEmail($contactEmail = null)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }
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
     * @return int
     */
    public function getLevelId()
    {
        return $this->levelId;
    }
    /**
     * @param int $levelId
     *
     * @return self
     */
    public function setLevelId($levelId = null)
    {
        $this->levelId = $levelId;
        return $this;
    }
    /**
     * @return Device[]
     */
    public function getDevices()
    {
        return $this->devices;
    }
    /**
     * @param Device[] $devices
     *
     * @return self
     */
    public function setDevices(array $devices = null)
    {
        $this->devices = $devices;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsOwner()
    {
        return $this->isOwner;
    }
    /**
     * @param bool $isOwner
     *
     * @return self
     */
    public function setIsOwner($isOwner = null)
    {
        $this->isOwner = $isOwner;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsOrangeUser()
    {
        return $this->isOrangeUser;
    }
    /**
     * @param bool $isOrangeUser
     *
     * @return self
     */
    public function setIsOrangeUser($isOrangeUser = null)
    {
        $this->isOrangeUser = $isOrangeUser;
        return $this;
    }
    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }
    /**
     * @param string $locale
     *
     * @return self
     */
    public function setLocale($locale = null)
    {
        $this->locale = $locale;
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
    public function getFrequencyProposalSumupEmail()
    {
        return $this->frequencyProposalSumupEmail;
    }
    /**
     * @param int $frequencyProposalSumupEmail
     *
     * @return self
     */
    public function setFrequencyProposalSumupEmail($frequencyProposalSumupEmail = null)
    {
        $this->frequencyProposalSumupEmail = $frequencyProposalSumupEmail;
        return $this;
    }
    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * @param string $position
     *
     * @return self
     */
    public function setPosition($position = null)
    {
        $this->position = $position;
        return $this;
    }
    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
    /**
     * @param string $avatar
     *
     * @return self
     */
    public function setAvatar($avatar = null)
    {
        $this->avatar = $avatar;
        return $this;
    }
    /**
     * @return string
     */
    public function getLinkedinAccountUrl()
    {
        return $this->linkedinAccountUrl;
    }
    /**
     * @param string $linkedinAccountUrl
     *
     * @return self
     */
    public function setLinkedinAccountUrl($linkedinAccountUrl = null)
    {
        $this->linkedinAccountUrl = $linkedinAccountUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getTwitterAccountUrl()
    {
        return $this->twitterAccountUrl;
    }
    /**
     * @param string $twitterAccountUrl
     *
     * @return self
     */
    public function setTwitterAccountUrl($twitterAccountUrl = null)
    {
        $this->twitterAccountUrl = $twitterAccountUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getFacebookAccountUrl()
    {
        return $this->facebookAccountUrl;
    }
    /**
     * @param string $facebookAccountUrl
     *
     * @return self
     */
    public function setFacebookAccountUrl($facebookAccountUrl = null)
    {
        $this->facebookAccountUrl = $facebookAccountUrl;
        return $this;
    }
    /**
     * @return int|mixed
     */
    public function getLastSignInAt()
    {
        return $this->lastSignInAt;
    }
    /**
     * @param int|mixed $lastSignInAt
     *
     * @return self
     */
    public function setLastSignInAt($lastSignInAt = null)
    {
        $this->lastSignInAt = $lastSignInAt;
        return $this;
    }
}