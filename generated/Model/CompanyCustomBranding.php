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

    public function getAccessReferral(): ?bool
    {
        return $this->accessReferral;
    }

    public function setAccessReferral(?bool $accessReferral): self
    {
        $this->accessReferral = $accessReferral;

        return $this;
    }

    public function getAccessWebNotifications(): ?bool
    {
        return $this->accessWebNotifications;
    }

    public function setAccessWebNotifications(?bool $accessWebNotifications): self
    {
        $this->accessWebNotifications = $accessWebNotifications;

        return $this;
    }

    public function getAccessSubscription(): ?bool
    {
        return $this->accessSubscription;
    }

    public function setAccessSubscription(?bool $accessSubscription): self
    {
        $this->accessSubscription = $accessSubscription;

        return $this;
    }

    public function getExcelUpload(): ?bool
    {
        return $this->excelUpload;
    }

    public function setExcelUpload(?bool $excelUpload): self
    {
        $this->excelUpload = $excelUpload;

        return $this;
    }

    public function getHasSupport(): ?bool
    {
        return $this->hasSupport;
    }

    public function setHasSupport(?bool $hasSupport): self
    {
        $this->hasSupport = $hasSupport;

        return $this;
    }

    public function getProductMap(): ?bool
    {
        return $this->productMap;
    }

    public function setProductMap(?bool $productMap): self
    {
        $this->productMap = $productMap;

        return $this;
    }

    public function getAccessTabCollaborators(): ?bool
    {
        return $this->accessTabCollaborators;
    }

    public function setAccessTabCollaborators(?bool $accessTabCollaborators): self
    {
        $this->accessTabCollaborators = $accessTabCollaborators;

        return $this;
    }

    public function getCollaboratorsUpsell(): ?bool
    {
        return $this->collaboratorsUpsell;
    }

    public function setCollaboratorsUpsell(?bool $collaboratorsUpsell): self
    {
        $this->collaboratorsUpsell = $collaboratorsUpsell;

        return $this;
    }

    public function getAlertSubscription(): ?bool
    {
        return $this->alertSubscription;
    }

    public function setAlertSubscription(?bool $alertSubscription): self
    {
        $this->alertSubscription = $alertSubscription;

        return $this;
    }

    public function getExcelUpsell(): ?bool
    {
        return $this->excelUpsell;
    }

    public function setExcelUpsell(?bool $excelUpsell): self
    {
        $this->excelUpsell = $excelUpsell;

        return $this;
    }

    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }

    public function setProductTitle(?string $productTitle): self
    {
        $this->productTitle = $productTitle;

        return $this;
    }

    public function getOnboardingVideosUrl(): ?CompanyCustomBrandingOnboardingVideosUrl
    {
        return $this->onboardingVideosUrl;
    }

    public function setOnboardingVideosUrl(?CompanyCustomBrandingOnboardingVideosUrl $onboardingVideosUrl): self
    {
        $this->onboardingVideosUrl = $onboardingVideosUrl;

        return $this;
    }
}
