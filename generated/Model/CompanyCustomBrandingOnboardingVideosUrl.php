<?php

namespace HbsResearch\Tilkee\API\Model;

class CompanyCustomBrandingOnboardingVideosUrl
{
    /**
     * @var string|null
     */
    protected $en;
    /**
     * @var string|null
     */
    protected $de;
    /**
     * @var string|null
     */
    protected $fr;

    public function getEn(): ?string
    {
        return $this->en;
    }

    public function setEn(?string $en): self
    {
        $this->en = $en;

        return $this;
    }

    public function getDe(): ?string
    {
        return $this->de;
    }

    public function setDe(?string $de): self
    {
        $this->de = $de;

        return $this;
    }

    public function getFr(): ?string
    {
        return $this->fr;
    }

    public function setFr(?string $fr): self
    {
        $this->fr = $fr;

        return $this;
    }
}
