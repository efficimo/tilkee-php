<?php

namespace Tilkee\API\Model;

class CompanyCustomBranding
{
    /**
     * @var bool
     */
    protected $accessReferral;
    /**
     * @var bool
     */
    protected $accessWebNotifications;
    /**
     * @var bool
     */
    protected $accessSubscription;
    /**
     * @var bool
     */
    protected $excelUpload;
    /**
     * @var bool
     */
    protected $hasSupport;
    /**
     * @var bool
     */
    protected $productMap;
    /**
     * @var bool
     */
    protected $accessTabCollaborators;
    /**
     * @var bool
     */
    protected $collaboratorsUpsell;
    /**
     * @var bool
     */
    protected $alertSubscription;
    /**
     * @var bool
     */
    protected $excelUpsell;
    /**
     * @var string
     */
    protected $productTitle;
    /**
     * @var CompanyCustomBrandingOnboardingVideosUrl
     */
    protected $onboardingVideosUrl;
    /**
     * @return bool
     */
    public function getAccessReferral()
    {
        return $this->accessReferral;
    }
    /**
     * @param bool $accessReferral
     *
     * @return self
     */
    public function setAccessReferral($accessReferral = null)
    {
        $this->accessReferral = $accessReferral;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAccessWebNotifications()
    {
        return $this->accessWebNotifications;
    }
    /**
     * @param bool $accessWebNotifications
     *
     * @return self
     */
    public function setAccessWebNotifications($accessWebNotifications = null)
    {
        $this->accessWebNotifications = $accessWebNotifications;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAccessSubscription()
    {
        return $this->accessSubscription;
    }
    /**
     * @param bool $accessSubscription
     *
     * @return self
     */
    public function setAccessSubscription($accessSubscription = null)
    {
        $this->accessSubscription = $accessSubscription;
        return $this;
    }
    /**
     * @return bool
     */
    public function getExcelUpload()
    {
        return $this->excelUpload;
    }
    /**
     * @param bool $excelUpload
     *
     * @return self
     */
    public function setExcelUpload($excelUpload = null)
    {
        $this->excelUpload = $excelUpload;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHasSupport()
    {
        return $this->hasSupport;
    }
    /**
     * @param bool $hasSupport
     *
     * @return self
     */
    public function setHasSupport($hasSupport = null)
    {
        $this->hasSupport = $hasSupport;
        return $this;
    }
    /**
     * @return bool
     */
    public function getProductMap()
    {
        return $this->productMap;
    }
    /**
     * @param bool $productMap
     *
     * @return self
     */
    public function setProductMap($productMap = null)
    {
        $this->productMap = $productMap;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAccessTabCollaborators()
    {
        return $this->accessTabCollaborators;
    }
    /**
     * @param bool $accessTabCollaborators
     *
     * @return self
     */
    public function setAccessTabCollaborators($accessTabCollaborators = null)
    {
        $this->accessTabCollaborators = $accessTabCollaborators;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCollaboratorsUpsell()
    {
        return $this->collaboratorsUpsell;
    }
    /**
     * @param bool $collaboratorsUpsell
     *
     * @return self
     */
    public function setCollaboratorsUpsell($collaboratorsUpsell = null)
    {
        $this->collaboratorsUpsell = $collaboratorsUpsell;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAlertSubscription()
    {
        return $this->alertSubscription;
    }
    /**
     * @param bool $alertSubscription
     *
     * @return self
     */
    public function setAlertSubscription($alertSubscription = null)
    {
        $this->alertSubscription = $alertSubscription;
        return $this;
    }
    /**
     * @return bool
     */
    public function getExcelUpsell()
    {
        return $this->excelUpsell;
    }
    /**
     * @param bool $excelUpsell
     *
     * @return self
     */
    public function setExcelUpsell($excelUpsell = null)
    {
        $this->excelUpsell = $excelUpsell;
        return $this;
    }
    /**
     * @return string
     */
    public function getProductTitle()
    {
        return $this->productTitle;
    }
    /**
     * @param string $productTitle
     *
     * @return self
     */
    public function setProductTitle($productTitle = null)
    {
        $this->productTitle = $productTitle;
        return $this;
    }
    /**
     * @return CompanyCustomBrandingOnboardingVideosUrl
     */
    public function getOnboardingVideosUrl()
    {
        return $this->onboardingVideosUrl;
    }
    /**
     * @param CompanyCustomBrandingOnboardingVideosUrl $onboardingVideosUrl
     *
     * @return self
     */
    public function setOnboardingVideosUrl(CompanyCustomBrandingOnboardingVideosUrl $onboardingVideosUrl = null)
    {
        $this->onboardingVideosUrl = $onboardingVideosUrl;
        return $this;
    }
}