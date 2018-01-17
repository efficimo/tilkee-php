<?php

namespace Tilkee\API\Model;

class CompanyCustomBrandingOnboardingVideosUrl
{
    /**
     * @var string
     */
    protected $en;
    /**
     * @var string
     */
    protected $de;
    /**
     * @var string
     */
    protected $fr;
    /**
     * @return string
     */
    public function getEn()
    {
        return $this->en;
    }
    /**
     * @param string $en
     *
     * @return self
     */
    public function setEn($en = null)
    {
        $this->en = $en;
        return $this;
    }
    /**
     * @return string
     */
    public function getDe()
    {
        return $this->de;
    }
    /**
     * @param string $de
     *
     * @return self
     */
    public function setDe($de = null)
    {
        $this->de = $de;
        return $this;
    }
    /**
     * @return string
     */
    public function getFr()
    {
        return $this->fr;
    }
    /**
     * @param string $fr
     *
     * @return self
     */
    public function setFr($fr = null)
    {
        $this->fr = $fr;
        return $this;
    }
}