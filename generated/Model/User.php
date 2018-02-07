<?php

namespace HbsResearch\Tilkee\API\Model;

class User
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
    protected $phoneNumber;
    /**
     * @var string
     */
    protected $cellPhoneNumber;
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
     * @var string
     */
    protected $supportEndDate;
    /**
     * @var Device[]
     */
    protected $devices;
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
     * @var bool
     */
    protected $isOwner;
    /**
     * @var bool
     */
    protected $canSeeStats;
    /**
     * @var int
     */
    protected $lastSignInAt;
    /**
     * @var string
     */
    protected $referralToken;
    /**
     * @var string
     */
    protected $convertToken;
    /**
     * @var string
     */
    protected $djJsonId;
    /**
     * @var \DateTime
     */
    protected $passwordChangedAt;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var int
     */
    protected $companyId;
    /**
     * @var \DateTime|mixed
     */
    protected $deletedAt;
    /**
     * @var \DateTime|mixed
     */
    protected $proposalSumupSentAt;
    /**
     * @var string
     */
    protected $sfId;
    /**
     * @var int
     */
    protected $frequencyNoreadSumupEmail;
    /**
     * @var string
     */
    protected $intercomId;
    /**
     * @var int
     */
    protected $defaultThemeId;
    /**
     * @var UserUtmItem[]
     */
    protected $utm;
    /**
     * @var string[]
     */
    protected $rights;
    /**
     * @var UserProfile
     */
    protected $profile;
    /**
     * @var string
     */
    protected $location;
    /**
     * @var Company
     */
    protected $company;
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
     * @return string
     */
    public function getSupportEndDate()
    {
        return $this->supportEndDate;
    }
    /**
     * @param string $supportEndDate
     *
     * @return self
     */
    public function setSupportEndDate($supportEndDate = null)
    {
        $this->supportEndDate = $supportEndDate;
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
    public function getCanSeeStats()
    {
        return $this->canSeeStats;
    }
    /**
     * @param bool $canSeeStats
     *
     * @return self
     */
    public function setCanSeeStats($canSeeStats = null)
    {
        $this->canSeeStats = $canSeeStats;
        return $this;
    }
    /**
     * @return int
     */
    public function getLastSignInAt()
    {
        return $this->lastSignInAt;
    }
    /**
     * @param int $lastSignInAt
     *
     * @return self
     */
    public function setLastSignInAt($lastSignInAt = null)
    {
        $this->lastSignInAt = $lastSignInAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getReferralToken()
    {
        return $this->referralToken;
    }
    /**
     * @param string $referralToken
     *
     * @return self
     */
    public function setReferralToken($referralToken = null)
    {
        $this->referralToken = $referralToken;
        return $this;
    }
    /**
     * @return string
     */
    public function getConvertToken()
    {
        return $this->convertToken;
    }
    /**
     * @param string $convertToken
     *
     * @return self
     */
    public function setConvertToken($convertToken = null)
    {
        $this->convertToken = $convertToken;
        return $this;
    }
    /**
     * @return string
     */
    public function getDjJsonId()
    {
        return $this->djJsonId;
    }
    /**
     * @param string $djJsonId
     *
     * @return self
     */
    public function setDjJsonId($djJsonId = null)
    {
        $this->djJsonId = $djJsonId;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getPasswordChangedAt()
    {
        return $this->passwordChangedAt;
    }
    /**
     * @param \DateTime $passwordChangedAt
     *
     * @return self
     */
    public function setPasswordChangedAt(\DateTime $passwordChangedAt = null)
    {
        $this->passwordChangedAt = $passwordChangedAt;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }
    /**
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId($companyId = null)
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * @return \DateTime|mixed
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }
    /**
     * @param \DateTime|mixed $deletedAt
     *
     * @return self
     */
    public function setDeletedAt($deletedAt = null)
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * @return \DateTime|mixed
     */
    public function getProposalSumupSentAt()
    {
        return $this->proposalSumupSentAt;
    }
    /**
     * @param \DateTime|mixed $proposalSumupSentAt
     *
     * @return self
     */
    public function setProposalSumupSentAt($proposalSumupSentAt = null)
    {
        $this->proposalSumupSentAt = $proposalSumupSentAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getSfId()
    {
        return $this->sfId;
    }
    /**
     * @param string $sfId
     *
     * @return self
     */
    public function setSfId($sfId = null)
    {
        $this->sfId = $sfId;
        return $this;
    }
    /**
     * @return int
     */
    public function getFrequencyNoreadSumupEmail()
    {
        return $this->frequencyNoreadSumupEmail;
    }
    /**
     * @param int $frequencyNoreadSumupEmail
     *
     * @return self
     */
    public function setFrequencyNoreadSumupEmail($frequencyNoreadSumupEmail = null)
    {
        $this->frequencyNoreadSumupEmail = $frequencyNoreadSumupEmail;
        return $this;
    }
    /**
     * @return string
     */
    public function getIntercomId()
    {
        return $this->intercomId;
    }
    /**
     * @param string $intercomId
     *
     * @return self
     */
    public function setIntercomId($intercomId = null)
    {
        $this->intercomId = $intercomId;
        return $this;
    }
    /**
     * @return int
     */
    public function getDefaultThemeId()
    {
        return $this->defaultThemeId;
    }
    /**
     * @param int $defaultThemeId
     *
     * @return self
     */
    public function setDefaultThemeId($defaultThemeId = null)
    {
        $this->defaultThemeId = $defaultThemeId;
        return $this;
    }
    /**
     * @return UserUtmItem[]
     */
    public function getUtm()
    {
        return $this->utm;
    }
    /**
     * @param UserUtmItem[] $utm
     *
     * @return self
     */
    public function setUtm(array $utm = null)
    {
        $this->utm = $utm;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getRights()
    {
        return $this->rights;
    }
    /**
     * @param string[] $rights
     *
     * @return self
     */
    public function setRights(array $rights = null)
    {
        $this->rights = $rights;
        return $this;
    }
    /**
     * @return UserProfile
     */
    public function getProfile()
    {
        return $this->profile;
    }
    /**
     * @param UserProfile $profile
     *
     * @return self
     */
    public function setProfile(UserProfile $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }
    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @param string $location
     *
     * @return self
     */
    public function setLocation($location = null)
    {
        $this->location = $location;
        return $this;
    }
    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * @param Company $company
     *
     * @return self
     */
    public function setCompany(Company $company = null)
    {
        $this->company = $company;
        return $this;
    }
}