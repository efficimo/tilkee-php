<?php

namespace HbsResearch\Tilkee\API\Model;

class Leader
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
    protected $cellPhoneNumber;
    /**
     * @var string|null
     */
    protected $phoneNumber;
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
     * @var Device[]|null
     */
    protected $devices;
    /**
     * @var bool|null
     */
    protected $isOwner;
    /**
     * @var bool|null
     */
    protected $isOrangeUser;
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
     * Timestamp.
     *
     * @var int|null
     */
    protected $lastSignInAt;

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

    public function getCellPhoneNumber(): ?string
    {
        return $this->cellPhoneNumber;
    }

    public function setCellPhoneNumber(?string $cellPhoneNumber): self
    {
        $this->cellPhoneNumber = $cellPhoneNumber;

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

    public function getIsOwner(): ?bool
    {
        return $this->isOwner;
    }

    public function setIsOwner(?bool $isOwner): self
    {
        $this->isOwner = $isOwner;

        return $this;
    }

    public function getIsOrangeUser(): ?bool
    {
        return $this->isOrangeUser;
    }

    public function setIsOrangeUser(?bool $isOrangeUser): self
    {
        $this->isOrangeUser = $isOrangeUser;

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
}
