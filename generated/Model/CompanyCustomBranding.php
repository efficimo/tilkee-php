<?php

namespace HbsResearch\Tilkee\API\Model;

class CompanyCustomBranding
{
    /**
     * @var bool|null
     */
    protected $accessReferral;
    /**
     * @var bool|null
     */
    protected $accessWebNotifications;
    /**
     * @var bool|null
     */
    protected $accessSubscription;
    /**
     * @var bool|null
     */
    protected $excelUpload;
    /**
     * @var bool|null
     */
    protected $hasSupport;
    /**
     * @var bool|null
     */
    protected $productMap;
    /**
     * @var bool|null
     */
    protected $accessTabCollaborators;
    /**
     * @var bool|null
     */
    protected $collaboratorsUpsell;
    /**
     * @var bool|null
     */
    protected $alertSubscription;
    /**
     * @var bool|null
     */
    protected $excelUpsell;
    /**
     * @var string|null
     */
    protected $productTitle;
    /**
     * @var CompanyCustomBrandingOnboardingVideosUrl|null
     */
    protected $onboardingVideosUrl;

    /**
     * @return bool|null
     */
    public function getAccessReferral(): ?bool
    {
        return $this->accessReferral;
    }

    /**
     * @param bool|null $accessReferral
     *
     * @return self
     */
    public function setAccessReferral(?bool $accessReferral): self
    {
        $this->accessReferral = $accessReferral;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAccessWebNotifications(): ?bool
    {
        return $this->accessWebNotifications;
    }

    /**
     * @param bool|null $accessWebNotifications
     *
     * @return self
     */
    public function setAccessWebNotifications(?bool $accessWebNotifications): self
    {
        $this->accessWebNotifications = $accessWebNotifications;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAccessSubscription(): ?bool
    {
        return $this->accessSubscription;
    }

    /**
     * @param bool|null $accessSubscription
     *
     * @return self
     */
    public function setAccessSubscription(?bool $accessSubscription): self
    {
        $this->accessSubscription = $accessSubscription;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getExcelUpload(): ?bool
    {
        return $this->excelUpload;
    }

    /**
     * @param bool|null $excelUpload
     *
     * @return self
     */
    public function setExcelUpload(?bool $excelUpload): self
    {
        $this->excelUpload = $excelUpload;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasSupport(): ?bool
    {
        return $this->hasSupport;
    }

    /**
     * @param bool|null $hasSupport
     *
     * @return self
     */
    public function setHasSupport(?bool $hasSupport): self
    {
        $this->hasSupport = $hasSupport;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getProductMap(): ?bool
    {
        return $this->productMap;
    }

    /**
     * @param bool|null $productMap
     *
     * @return self
     */
    public function setProductMap(?bool $productMap): self
    {
        $this->productMap = $productMap;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAccessTabCollaborators(): ?bool
    {
        return $this->accessTabCollaborators;
    }

    /**
     * @param bool|null $accessTabCollaborators
     *
     * @return self
     */
    public function setAccessTabCollaborators(?bool $accessTabCollaborators): self
    {
        $this->accessTabCollaborators = $accessTabCollaborators;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCollaboratorsUpsell(): ?bool
    {
        return $this->collaboratorsUpsell;
    }

    /**
     * @param bool|null $collaboratorsUpsell
     *
     * @return self
     */
    public function setCollaboratorsUpsell(?bool $collaboratorsUpsell): self
    {
        $this->collaboratorsUpsell = $collaboratorsUpsell;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAlertSubscription(): ?bool
    {
        return $this->alertSubscription;
    }

    /**
     * @param bool|null $alertSubscription
     *
     * @return self
     */
    public function setAlertSubscription(?bool $alertSubscription): self
    {
        $this->alertSubscription = $alertSubscription;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getExcelUpsell(): ?bool
    {
        return $this->excelUpsell;
    }

    /**
     * @param bool|null $excelUpsell
     *
     * @return self
     */
    public function setExcelUpsell(?bool $excelUpsell): self
    {
        $this->excelUpsell = $excelUpsell;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }

    /**
     * @param string|null $productTitle
     *
     * @return self
     */
    public function setProductTitle(?string $productTitle): self
    {
        $this->productTitle = $productTitle;

        return $this;
    }

    /**
     * @return CompanyCustomBrandingOnboardingVideosUrl|null
     */
    public function getOnboardingVideosUrl(): ?CompanyCustomBrandingOnboardingVideosUrl
    {
        return $this->onboardingVideosUrl;
    }

    /**
     * @param CompanyCustomBrandingOnboardingVideosUrl|null $onboardingVideosUrl
     *
     * @return self
     */
    public function setOnboardingVideosUrl(?CompanyCustomBrandingOnboardingVideosUrl $onboardingVideosUrl): self
    {
        $this->onboardingVideosUrl = $onboardingVideosUrl;

        return $this;
    }
}
