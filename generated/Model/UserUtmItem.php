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

    public function getUrlReferer(): ?string
    {
        return $this->urlReferer;
    }

    public function setUrlReferer(?string $urlReferer): self
    {
        $this->urlReferer = $urlReferer;

        return $this;
    }

    public function getUTM(): ?UserUtmItemUTM
    {
        return $this->uTM;
    }

    public function setUTM(?UserUtmItemUTM $uTM): self
    {
        $this->uTM = $uTM;

        return $this;
    }
}
