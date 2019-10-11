<?php

namespace HbsResearch\Tilkee\API\Model;

class User
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $firstName;
    /**
     * @var string|null
     */
    protected $lastName;
    /**
     * @var string|null
     */
    protected $fullName;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * @var string|null
     */
    protected $cellPhoneNumber;
    /**
     * @var string|null
     */
    protected $contactEmail;
    /**
     * @var bool|null
     */
    protected $shouldReceiveEmails;
    /**
     * @var int|null
     */
    protected $levelId;
    /**
     * @var string|null
     */
    protected $supportEndDate;
    /**
     * @var Device[]|null
     */
    protected $devices;
    /**
     * @var string|null
     */
    protected $locale;
    /**
     * @var bool|null
     */
    protected $shouldReceiveConnexionEmail;
    /**
     * @var int|null
     */
    protected $frequencyProposalSumupEmail;
    /**
     * @var string|null
     */
    protected $position;
    /**
     * @var string|null
     */
    protected $avatar;
    /**
     * @var string|null
     */
    protected $linkedinAccountUrl = '';
    /**
     * @var string|null
     */
    protected $twitterAccountUrl = '';
    /**
     * @var string|null
     */
    protected $facebookAccountUrl = '';
    /**
     * @var bool|null
     */
    protected $isOwner;
    /**
     * @var bool|null
     */
    protected $canSeeStats;
    /**
     * Timestamp.
     *
     * @var int|null
     */
    protected $lastSignInAt;
    /**
     * @var string|null
     */
    protected $referralToken;
    /**
     * @var string|null
     */
    protected $convertToken;
    /**
     * @var string|null
     */
    protected $djJsonId;
    /**
     * @var \DateTime|null
     */
    protected $passwordChangedAt;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * @var int|null
     */
    protected $companyId;
    /**
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * @var \DateTime|null
     */
    protected $proposalSumupSentAt;
    /**
     * @var string|null
     */
    protected $sfId;
    /**
     * @var int|null
     */
    protected $frequencyNoreadSumupEmail;
    /**
     * @var string|null
     */
    protected $intercomId;
    /**
     * @var int|null
     */
    protected $defaultThemeId;
    /**
     * @var UserUtmItem[]|null
     */
    protected $utm;
    /**
     * @var string[]|null
     */
    protected $rights;
    /**
     * @var UserProfile|null
     */
    protected $profile;
    /**
     * @var string|null
     */
    protected $location;
    /**
     * @var Company|null
     */
    protected $company;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * @param string|null $fullName
     *
     * @return self
     */
    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCellPhoneNumber(): ?string
    {
        return $this->cellPhoneNumber;
    }

    /**
     * @param string|null $cellPhoneNumber
     *
     * @return self
     */
    public function setCellPhoneNumber(?string $cellPhoneNumber): self
    {
        $this->cellPhoneNumber = $cellPhoneNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    /**
     * @param string|null $contactEmail
     *
     * @return self
     */
    public function setContactEmail(?string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

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
     * @return int|null
     */
    public function getLevelId(): ?int
    {
        return $this->levelId;
    }

    /**
     * @param int|null $levelId
     *
     * @return self
     */
    public function setLevelId(?int $levelId): self
    {
        $this->levelId = $levelId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSupportEndDate(): ?string
    {
        return $this->supportEndDate;
    }

    /**
     * @param string|null $supportEndDate
     *
     * @return self
     */
    public function setSupportEndDate(?string $supportEndDate): self
    {
        $this->supportEndDate = $supportEndDate;

        return $this;
    }

    /**
     * @return Device[]|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }

    /**
     * @param Device[]|null $devices
     *
     * @return self
     */
    public function setDevices(?array $devices): self
    {
        $this->devices = $devices;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string|null $locale
     *
     * @return self
     */
    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

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
    public function getFrequencyProposalSumupEmail(): ?int
    {
        return $this->frequencyProposalSumupEmail;
    }

    /**
     * @param int|null $frequencyProposalSumupEmail
     *
     * @return self
     */
    public function setFrequencyProposalSumupEmail(?int $frequencyProposalSumupEmail): self
    {
        $this->frequencyProposalSumupEmail = $frequencyProposalSumupEmail;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param string|null $avatar
     *
     * @return self
     */
    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLinkedinAccountUrl(): ?string
    {
        return $this->linkedinAccountUrl;
    }

    /**
     * @param string|null $linkedinAccountUrl
     *
     * @return self
     */
    public function setLinkedinAccountUrl(?string $linkedinAccountUrl): self
    {
        $this->linkedinAccountUrl = $linkedinAccountUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTwitterAccountUrl(): ?string
    {
        return $this->twitterAccountUrl;
    }

    /**
     * @param string|null $twitterAccountUrl
     *
     * @return self
     */
    public function setTwitterAccountUrl(?string $twitterAccountUrl): self
    {
        $this->twitterAccountUrl = $twitterAccountUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFacebookAccountUrl(): ?string
    {
        return $this->facebookAccountUrl;
    }

    /**
     * @param string|null $facebookAccountUrl
     *
     * @return self
     */
    public function setFacebookAccountUrl(?string $facebookAccountUrl): self
    {
        $this->facebookAccountUrl = $facebookAccountUrl;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsOwner(): ?bool
    {
        return $this->isOwner;
    }

    /**
     * @param bool|null $isOwner
     *
     * @return self
     */
    public function setIsOwner(?bool $isOwner): self
    {
        $this->isOwner = $isOwner;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanSeeStats(): ?bool
    {
        return $this->canSeeStats;
    }

    /**
     * @param bool|null $canSeeStats
     *
     * @return self
     */
    public function setCanSeeStats(?bool $canSeeStats): self
    {
        $this->canSeeStats = $canSeeStats;

        return $this;
    }

    /**
     * Timestamp.
     *
     * @return int|null
     */
    public function getLastSignInAt(): ?int
    {
        return $this->lastSignInAt;
    }

    /**
     * Timestamp.
     *
     * @param int|null $lastSignInAt
     *
     * @return self
     */
    public function setLastSignInAt(?int $lastSignInAt): self
    {
        $this->lastSignInAt = $lastSignInAt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferralToken(): ?string
    {
        return $this->referralToken;
    }

    /**
     * @param string|null $referralToken
     *
     * @return self
     */
    public function setReferralToken(?string $referralToken): self
    {
        $this->referralToken = $referralToken;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getConvertToken(): ?string
    {
        return $this->convertToken;
    }

    /**
     * @param string|null $convertToken
     *
     * @return self
     */
    public function setConvertToken(?string $convertToken): self
    {
        $this->convertToken = $convertToken;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDjJsonId(): ?string
    {
        return $this->djJsonId;
    }

    /**
     * @param string|null $djJsonId
     *
     * @return self
     */
    public function setDjJsonId(?string $djJsonId): self
    {
        $this->djJsonId = $djJsonId;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getPasswordChangedAt(): ?\DateTime
    {
        return $this->passwordChangedAt;
    }

    /**
     * @param \DateTime|null $passwordChangedAt
     *
     * @return self
     */
    public function setPasswordChangedAt(?\DateTime $passwordChangedAt): self
    {
        $this->passwordChangedAt = $passwordChangedAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * @param int|null $companyId
     *
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    /**
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getProposalSumupSentAt(): ?\DateTime
    {
        return $this->proposalSumupSentAt;
    }

    /**
     * @param \DateTime|null $proposalSumupSentAt
     *
     * @return self
     */
    public function setProposalSumupSentAt(?\DateTime $proposalSumupSentAt): self
    {
        $this->proposalSumupSentAt = $proposalSumupSentAt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSfId(): ?string
    {
        return $this->sfId;
    }

    /**
     * @param string|null $sfId
     *
     * @return self
     */
    public function setSfId(?string $sfId): self
    {
        $this->sfId = $sfId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getFrequencyNoreadSumupEmail(): ?int
    {
        return $this->frequencyNoreadSumupEmail;
    }

    /**
     * @param int|null $frequencyNoreadSumupEmail
     *
     * @return self
     */
    public function setFrequencyNoreadSumupEmail(?int $frequencyNoreadSumupEmail): self
    {
        $this->frequencyNoreadSumupEmail = $frequencyNoreadSumupEmail;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIntercomId(): ?string
    {
        return $this->intercomId;
    }

    /**
     * @param string|null $intercomId
     *
     * @return self
     */
    public function setIntercomId(?string $intercomId): self
    {
        $this->intercomId = $intercomId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDefaultThemeId(): ?int
    {
        return $this->defaultThemeId;
    }

    /**
     * @param int|null $defaultThemeId
     *
     * @return self
     */
    public function setDefaultThemeId(?int $defaultThemeId): self
    {
        $this->defaultThemeId = $defaultThemeId;

        return $this;
    }

    /**
     * @return UserUtmItem[]|null
     */
    public function getUtm(): ?array
    {
        return $this->utm;
    }

    /**
     * @param UserUtmItem[]|null $utm
     *
     * @return self
     */
    public function setUtm(?array $utm): self
    {
        $this->utm = $utm;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getRights(): ?array
    {
        return $this->rights;
    }

    /**
     * @param string[]|null $rights
     *
     * @return self
     */
    public function setRights(?array $rights): self
    {
        $this->rights = $rights;

        return $this;
    }

    /**
     * @return UserProfile|null
     */
    public function getProfile(): ?UserProfile
    {
        return $this->profile;
    }

    /**
     * @param UserProfile|null $profile
     *
     * @return self
     */
    public function setProfile(?UserProfile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @param string|null $location
     *
     * @return self
     */
    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Company|null
     */
    public function getCompany(): ?Company
    {
        return $this->company;
    }

    /**
     * @param Company|null $company
     *
     * @return self
     */
    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }
}
