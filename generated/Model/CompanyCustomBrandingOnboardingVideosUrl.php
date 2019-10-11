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

    /**
     * @return string|null
     */
    public function getEn(): ?string
    {
        return $this->en;
    }

    /**
     * @param string|null $en
     *
     * @return self
     */
    public function setEn(?string $en): self
    {
        $this->en = $en;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDe(): ?string
    {
        return $this->de;
    }

    /**
     * @param string|null $de
     *
     * @return self
     */
    public function setDe(?string $de): self
    {
        $this->de = $de;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFr(): ?string
    {
        return $this->fr;
    }

    /**
     * @param string|null $fr
     *
     * @return self
     */
    public function setFr(?string $fr): self
    {
        $this->fr = $fr;

        return $this;
    }
}
