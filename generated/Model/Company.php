<?php

namespace HbsResearch\Tilkee\API\Model;

class Company
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var int|null
     */
    protected $usersToChargeCounter;
    /**
     * @var bool|null
     */
    protected $haveYousign;
    /**
     * @var bool|null
     */
    protected $haveManagement;
    /**
     * @var bool|null
     */
    protected $hasCustomBranding;
    /**
     * @var string[]|null
     */
    protected $companyRights;
    /**
     * @var int|null
     */
    protected $nbEmployees;
    /**
     * @var bool|null
     */
    protected $hasProabono;
    /**
     * @var bool|null
     */
    protected $subscriptionHasPayment;
    /**
     * @var string|null
     */
    protected $subscriptionSegment;
    /**
     * @var bool|null
     */
    protected $slimpayValidated;
    /**
     * @var \DateTime|null
     */
    protected $subscriptionTrialDate;
    /**
     * @var int|null
     */
    protected $defaultThemeId;
    /**
     * @var string[][]|null
     */
    protected $usableDomains;
    /**
     * @var bool|null
     */
    protected $geolocActivate;
    /**
     * @var CompanyCustomBranding|null
     */
    protected $customBranding;
    /**
     * @var string|null
     */
    protected $location;

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getUsersToChargeCounter(): ?int
    {
        return $this->usersToChargeCounter;
    }

    /**
     * @param int|null $usersToChargeCounter
     *
     * @return self
     */
    public function setUsersToChargeCounter(?int $usersToChargeCounter): self
    {
        $this->usersToChargeCounter = $usersToChargeCounter;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHaveYousign(): ?bool
    {
        return $this->haveYousign;
    }

    /**
     * @param bool|null $haveYousign
     *
     * @return self
     */
    public function setHaveYousign(?bool $haveYousign): self
    {
        $this->haveYousign = $haveYousign;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHaveManagement(): ?bool
    {
        return $this->haveManagement;
    }

    /**
     * @param bool|null $haveManagement
     *
     * @return self
     */
    public function setHaveManagement(?bool $haveManagement): self
    {
        $this->haveManagement = $haveManagement;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasCustomBranding(): ?bool
    {
        return $this->hasCustomBranding;
    }

    /**
     * @param bool|null $hasCustomBranding
     *
     * @return self
     */
    public function setHasCustomBranding(?bool $hasCustomBranding): self
    {
        $this->hasCustomBranding = $hasCustomBranding;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getCompanyRights(): ?array
    {
        return $this->companyRights;
    }

    /**
     * @param string[]|null $companyRights
     *
     * @return self
     */
    public function setCompanyRights(?array $companyRights): self
    {
        $this->companyRights = $companyRights;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbEmployees(): ?int
    {
        return $this->nbEmployees;
    }

    /**
     * @param int|null $nbEmployees
     *
     * @return self
     */
    public function setNbEmployees(?int $nbEmployees): self
    {
        $this->nbEmployees = $nbEmployees;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasProabono(): ?bool
    {
        return $this->hasProabono;
    }

    /**
     * @param bool|null $hasProabono
     *
     * @return self
     */
    public function setHasProabono(?bool $hasProabono): self
    {
        $this->hasProabono = $hasProabono;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSubscriptionHasPayment(): ?bool
    {
        return $this->subscriptionHasPayment;
    }

    /**
     * @param bool|null $subscriptionHasPayment
     *
     * @return self
     */
    public function setSubscriptionHasPayment(?bool $subscriptionHasPayment): self
    {
        $this->subscriptionHasPayment = $subscriptionHasPayment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionSegment(): ?string
    {
        return $this->subscriptionSegment;
    }

    /**
     * @param string|null $subscriptionSegment
     *
     * @return self
     */
    public function setSubscriptionSegment(?string $subscriptionSegment): self
    {
        $this->subscriptionSegment = $subscriptionSegment;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSlimpayValidated(): ?bool
    {
        return $this->slimpayValidated;
    }

    /**
     * @param bool|null $slimpayValidated
     *
     * @return self
     */
    public function setSlimpayValidated(?bool $slimpayValidated): self
    {
        $this->slimpayValidated = $slimpayValidated;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getSubscriptionTrialDate(): ?\DateTime
    {
        return $this->subscriptionTrialDate;
    }

    /**
     * @param \DateTime|null $subscriptionTrialDate
     *
     * @return self
     */
    public function setSubscriptionTrialDate(?\DateTime $subscriptionTrialDate): self
    {
        $this->subscriptionTrialDate = $subscriptionTrialDate;

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
     * @return string[][]|null
     */
    public function getUsableDomains(): ?array
    {
        return $this->usableDomains;
    }

    /**
     * @param string[][]|null $usableDomains
     *
     * @return self
     */
    public function setUsableDomains(?array $usableDomains): self
    {
        $this->usableDomains = $usableDomains;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getGeolocActivate(): ?bool
    {
        return $this->geolocActivate;
    }

    /**
     * @param bool|null $geolocActivate
     *
     * @return self
     */
    public function setGeolocActivate(?bool $geolocActivate): self
    {
        $this->geolocActivate = $geolocActivate;

        return $this;
    }

    /**
     * @return CompanyCustomBranding|null
     */
    public function getCustomBranding(): ?CompanyCustomBranding
    {
        return $this->customBranding;
    }

    /**
     * @param CompanyCustomBranding|null $customBranding
     *
     * @return self
     */
    public function setCustomBranding(?CompanyCustomBranding $customBranding): self
    {
        $this->customBranding = $customBranding;

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
}
