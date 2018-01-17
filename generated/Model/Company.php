<?php

namespace Tilkee\API\Model;

class Company
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $usersToChargeCounter;
    /**
     * @var bool
     */
    protected $haveYousign;
    /**
     * @var bool
     */
    protected $haveManagement;
    /**
     * @var bool
     */
    protected $hasCustomBranding;
    /**
     * @var string[]
     */
    protected $companyRights;
    /**
     * @var int
     */
    protected $nbEmployees;
    /**
     * @var bool
     */
    protected $hasProabono;
    /**
     * @var bool
     */
    protected $subscriptionHasPayment;
    /**
     * @var string
     */
    protected $subscriptionSegment;
    /**
     * @var bool
     */
    protected $slimpayValidated;
    /**
     * @var \DateTime
     */
    protected $subscriptionTrialDate;
    /**
     * @var int
     */
    protected $defaultThemeId;
    /**
     * @var string[][]
     */
    protected $usableDomains;
    /**
     * @var bool
     */
    protected $geolocActivate;
    /**
     * @var CompanyCustomBranding
     */
    protected $customBranding;
    /**
     * @var string
     */
    protected $location;
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
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return int
     */
    public function getUsersToChargeCounter()
    {
        return $this->usersToChargeCounter;
    }
    /**
     * @param int $usersToChargeCounter
     *
     * @return self
     */
    public function setUsersToChargeCounter($usersToChargeCounter = null)
    {
        $this->usersToChargeCounter = $usersToChargeCounter;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHaveYousign()
    {
        return $this->haveYousign;
    }
    /**
     * @param bool $haveYousign
     *
     * @return self
     */
    public function setHaveYousign($haveYousign = null)
    {
        $this->haveYousign = $haveYousign;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHaveManagement()
    {
        return $this->haveManagement;
    }
    /**
     * @param bool $haveManagement
     *
     * @return self
     */
    public function setHaveManagement($haveManagement = null)
    {
        $this->haveManagement = $haveManagement;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHasCustomBranding()
    {
        return $this->hasCustomBranding;
    }
    /**
     * @param bool $hasCustomBranding
     *
     * @return self
     */
    public function setHasCustomBranding($hasCustomBranding = null)
    {
        $this->hasCustomBranding = $hasCustomBranding;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getCompanyRights()
    {
        return $this->companyRights;
    }
    /**
     * @param string[] $companyRights
     *
     * @return self
     */
    public function setCompanyRights(array $companyRights = null)
    {
        $this->companyRights = $companyRights;
        return $this;
    }
    /**
     * @return int
     */
    public function getNbEmployees()
    {
        return $this->nbEmployees;
    }
    /**
     * @param int $nbEmployees
     *
     * @return self
     */
    public function setNbEmployees($nbEmployees = null)
    {
        $this->nbEmployees = $nbEmployees;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHasProabono()
    {
        return $this->hasProabono;
    }
    /**
     * @param bool $hasProabono
     *
     * @return self
     */
    public function setHasProabono($hasProabono = null)
    {
        $this->hasProabono = $hasProabono;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSubscriptionHasPayment()
    {
        return $this->subscriptionHasPayment;
    }
    /**
     * @param bool $subscriptionHasPayment
     *
     * @return self
     */
    public function setSubscriptionHasPayment($subscriptionHasPayment = null)
    {
        $this->subscriptionHasPayment = $subscriptionHasPayment;
        return $this;
    }
    /**
     * @return string
     */
    public function getSubscriptionSegment()
    {
        return $this->subscriptionSegment;
    }
    /**
     * @param string $subscriptionSegment
     *
     * @return self
     */
    public function setSubscriptionSegment($subscriptionSegment = null)
    {
        $this->subscriptionSegment = $subscriptionSegment;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSlimpayValidated()
    {
        return $this->slimpayValidated;
    }
    /**
     * @param bool $slimpayValidated
     *
     * @return self
     */
    public function setSlimpayValidated($slimpayValidated = null)
    {
        $this->slimpayValidated = $slimpayValidated;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getSubscriptionTrialDate()
    {
        return $this->subscriptionTrialDate;
    }
    /**
     * @param \DateTime $subscriptionTrialDate
     *
     * @return self
     */
    public function setSubscriptionTrialDate(\DateTime $subscriptionTrialDate = null)
    {
        $this->subscriptionTrialDate = $subscriptionTrialDate;
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
     * @return string[][]
     */
    public function getUsableDomains()
    {
        return $this->usableDomains;
    }
    /**
     * @param string[][] $usableDomains
     *
     * @return self
     */
    public function setUsableDomains(array $usableDomains = null)
    {
        $this->usableDomains = $usableDomains;
        return $this;
    }
    /**
     * @return bool
     */
    public function getGeolocActivate()
    {
        return $this->geolocActivate;
    }
    /**
     * @param bool $geolocActivate
     *
     * @return self
     */
    public function setGeolocActivate($geolocActivate = null)
    {
        $this->geolocActivate = $geolocActivate;
        return $this;
    }
    /**
     * @return CompanyCustomBranding
     */
    public function getCustomBranding()
    {
        return $this->customBranding;
    }
    /**
     * @param CompanyCustomBranding $customBranding
     *
     * @return self
     */
    public function setCustomBranding(CompanyCustomBranding $customBranding = null)
    {
        $this->customBranding = $customBranding;
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
}