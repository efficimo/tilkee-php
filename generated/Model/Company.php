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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUsersToChargeCounter(): ?int
    {
        return $this->usersToChargeCounter;
    }

    public function setUsersToChargeCounter(?int $usersToChargeCounter): self
    {
        $this->usersToChargeCounter = $usersToChargeCounter;

        return $this;
    }

    public function getHaveYousign(): ?bool
    {
        return $this->haveYousign;
    }

    public function setHaveYousign(?bool $haveYousign): self
    {
        $this->haveYousign = $haveYousign;

        return $this;
    }

    public function getHaveManagement(): ?bool
    {
        return $this->haveManagement;
    }

    public function setHaveManagement(?bool $haveManagement): self
    {
        $this->haveManagement = $haveManagement;

        return $this;
    }

    public function getHasCustomBranding(): ?bool
    {
        return $this->hasCustomBranding;
    }

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
     */
    public function setCompanyRights(?array $companyRights): self
    {
        $this->companyRights = $companyRights;

        return $this;
    }

    public function getNbEmployees(): ?int
    {
        return $this->nbEmployees;
    }

    public function setNbEmployees(?int $nbEmployees): self
    {
        $this->nbEmployees = $nbEmployees;

        return $this;
    }

    public function getHasProabono(): ?bool
    {
        return $this->hasProabono;
    }

    public function setHasProabono(?bool $hasProabono): self
    {
        $this->hasProabono = $hasProabono;

        return $this;
    }

    public function getSubscriptionHasPayment(): ?bool
    {
        return $this->subscriptionHasPayment;
    }

    public function setSubscriptionHasPayment(?bool $subscriptionHasPayment): self
    {
        $this->subscriptionHasPayment = $subscriptionHasPayment;

        return $this;
    }

    public function getSubscriptionSegment(): ?string
    {
        return $this->subscriptionSegment;
    }

    public function setSubscriptionSegment(?string $subscriptionSegment): self
    {
        $this->subscriptionSegment = $subscriptionSegment;

        return $this;
    }

    public function getSlimpayValidated(): ?bool
    {
        return $this->slimpayValidated;
    }

    public function setSlimpayValidated(?bool $slimpayValidated): self
    {
        $this->slimpayValidated = $slimpayValidated;

        return $this;
    }

    public function getSubscriptionTrialDate(): ?\DateTime
    {
        return $this->subscriptionTrialDate;
    }

    public function setSubscriptionTrialDate(?\DateTime $subscriptionTrialDate): self
    {
        $this->subscriptionTrialDate = $subscriptionTrialDate;

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
     * @return string[][]|null
     */
    public function getUsableDomains(): ?array
    {
        return $this->usableDomains;
    }

    /**
     * @param string[][]|null $usableDomains
     */
    public function setUsableDomains(?array $usableDomains): self
    {
        $this->usableDomains = $usableDomains;

        return $this;
    }

    public function getGeolocActivate(): ?bool
    {
        return $this->geolocActivate;
    }

    public function setGeolocActivate(?bool $geolocActivate): self
    {
        $this->geolocActivate = $geolocActivate;

        return $this;
    }

    public function getCustomBranding(): ?CompanyCustomBranding
    {
        return $this->customBranding;
    }

    public function setCustomBranding(?CompanyCustomBranding $customBranding): self
    {
        $this->customBranding = $customBranding;

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
}
