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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getCellPhoneNumber(): ?string
    {
        return $this->cellPhoneNumber;
    }

    public function setCellPhoneNumber(?string $cellPhoneNumber): self
    {
        $this->cellPhoneNumber = $cellPhoneNumber;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    public function getShouldReceiveEmails(): ?bool
    {
        return $this->shouldReceiveEmails;
    }

    public function setShouldReceiveEmails(?bool $shouldReceiveEmails): self
    {
        $this->shouldReceiveEmails = $shouldReceiveEmails;

        return $this;
    }

    public function getLevelId(): ?int
    {
        return $this->levelId;
    }

    public function setLevelId(?int $levelId): self
    {
        $this->levelId = $levelId;

        return $this;
    }

    public function getSupportEndDate(): ?string
    {
        return $this->supportEndDate;
    }

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
     */
    public function setDevices(?array $devices): self
    {
        $this->devices = $devices;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

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

    public function getFrequencyProposalSumupEmail(): ?int
    {
        return $this->frequencyProposalSumupEmail;
    }

    public function setFrequencyProposalSumupEmail(?int $frequencyProposalSumupEmail): self
    {
        $this->frequencyProposalSumupEmail = $frequencyProposalSumupEmail;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getLinkedinAccountUrl(): ?string
    {
        return $this->linkedinAccountUrl;
    }

    public function setLinkedinAccountUrl(?string $linkedinAccountUrl): self
    {
        $this->linkedinAccountUrl = $linkedinAccountUrl;

        return $this;
    }

    public function getTwitterAccountUrl(): ?string
    {
        return $this->twitterAccountUrl;
    }

    public function setTwitterAccountUrl(?string $twitterAccountUrl): self
    {
        $this->twitterAccountUrl = $twitterAccountUrl;

        return $this;
    }

    public function getFacebookAccountUrl(): ?string
    {
        return $this->facebookAccountUrl;
    }

    public function setFacebookAccountUrl(?string $facebookAccountUrl): self
    {
        $this->facebookAccountUrl = $facebookAccountUrl;

        return $this;
    }

    public function getIsOwner(): ?bool
    {
        return $this->isOwner;
    }

    public function setIsOwner(?bool $isOwner): self
    {
        $this->isOwner = $isOwner;

        return $this;
    }

    public function getCanSeeStats(): ?bool
    {
        return $this->canSeeStats;
    }

    public function setCanSeeStats(?bool $canSeeStats): self
    {
        $this->canSeeStats = $canSeeStats;

        return $this;
    }

    /**
     * Timestamp.
     */
    public function getLastSignInAt(): ?int
    {
        return $this->lastSignInAt;
    }

    /**
     * Timestamp.
     */
    public function setLastSignInAt(?int $lastSignInAt): self
    {
        $this->lastSignInAt = $lastSignInAt;

        return $this;
    }

    public function getReferralToken(): ?string
    {
        return $this->referralToken;
    }

    public function setReferralToken(?string $referralToken): self
    {
        $this->referralToken = $referralToken;

        return $this;
    }

    public function getConvertToken(): ?string
    {
        return $this->convertToken;
    }

    public function setConvertToken(?string $convertToken): self
    {
        $this->convertToken = $convertToken;

        return $this;
    }

    public function getDjJsonId(): ?string
    {
        return $this->djJsonId;
    }

    public function setDjJsonId(?string $djJsonId): self
    {
        $this->djJsonId = $djJsonId;

        return $this;
    }

    public function getPasswordChangedAt(): ?\DateTime
    {
        return $this->passwordChangedAt;
    }

    public function setPasswordChangedAt(?\DateTime $passwordChangedAt): self
    {
        $this->passwordChangedAt = $passwordChangedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getProposalSumupSentAt(): ?\DateTime
    {
        return $this->proposalSumupSentAt;
    }

    public function setProposalSumupSentAt(?\DateTime $proposalSumupSentAt): self
    {
        $this->proposalSumupSentAt = $proposalSumupSentAt;

        return $this;
    }

    public function getSfId(): ?string
    {
        return $this->sfId;
    }

    public function setSfId(?string $sfId): self
    {
        $this->sfId = $sfId;

        return $this;
    }

    public function getFrequencyNoreadSumupEmail(): ?int
    {
        return $this->frequencyNoreadSumupEmail;
    }

    public function setFrequencyNoreadSumupEmail(?int $frequencyNoreadSumupEmail): self
    {
        $this->frequencyNoreadSumupEmail = $frequencyNoreadSumupEmail;

        return $this;
    }

    public function getIntercomId(): ?string
    {
        return $this->intercomId;
    }

    public function setIntercomId(?string $intercomId): self
    {
        $this->intercomId = $intercomId;

        return $this;
    }

    public function getDefaultThemeId(): ?int
    {
        return $this->defaultThemeId;
    }

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
     */
    public function setRights(?array $rights): self
    {
        $this->rights = $rights;

        return $this;
    }

    public function getProfile(): ?UserProfile
    {
        return $this->profile;
    }

    public function setProfile(?UserProfile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }
}
