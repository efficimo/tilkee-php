<?php

namespace HbsResearch\Tilkee\API\Model;

class UserUtmItem
{
    /**
     * @var string|null
     */
    protected $urlReferer;
    /**
     * @var UserUtmItemUTM|null
     */
    protected $uTM;

    /**
     * @return string|null
     */
    public function getUrlReferer(): ?string
    {
        return $this->urlReferer;
    }

    /**
     * @param string|null $urlReferer
     *
     * @return self
     */
    public function setUrlReferer(?string $urlReferer): self
    {
        $this->urlReferer = $urlReferer;

        return $this;
    }

    /**
     * @return UserUtmItemUTM|null
     */
    public function getUTM(): ?UserUtmItemUTM
    {
        return $this->uTM;
    }

    /**
     * @param UserUtmItemUTM|null $uTM
     *
     * @return self
     */
    public function setUTM(?UserUtmItemUTM $uTM): self
    {
        $this->uTM = $uTM;

        return $this;
    }
}
