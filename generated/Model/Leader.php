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
    public function getIsOrangeUser(): ?bool
    {
        return $this->isOrangeUser;
    }

    /**
     * @param bool|null $isOrangeUser
     *
     * @return self
     */
    public function setIsOrangeUser(?bool $isOrangeUser): self
    {
        $this->isOrangeUser = $isOrangeUser;

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
}
