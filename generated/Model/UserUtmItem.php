<?php

namespace HbsResearch\Tilkee\API\Model;

class UserUtmItem
{
    /**
     * @var string
     */
    protected $urlReferer;
    /**
     * @var UserUtmItemUTM
     */
    protected $uTM;
    /**
     * @return string
     */
    public function getUrlReferer()
    {
        return $this->urlReferer;
    }
    /**
     * @param string $urlReferer
     *
     * @return self
     */
    public function setUrlReferer($urlReferer = null)
    {
        $this->urlReferer = $urlReferer;
        return $this;
    }
    /**
     * @return UserUtmItemUTM
     */
    public function getUTM()
    {
        return $this->uTM;
    }
    /**
     * @param UserUtmItemUTM $uTM
     *
     * @return self
     */
    public function setUTM(UserUtmItemUTM $uTM = null)
    {
        $this->uTM = $uTM;
        return $this;
    }
}