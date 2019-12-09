<?php

namespace HbsResearch\Tilkee\API\Model;

class NotificationsPostBody
{
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $rule;
    /**
     * @var string|null
     */
    protected $target = 'Webhook';
    /**
     * @var int|null
     */
    protected $companyId;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getRule(): ?string
    {
        return $this->rule;
    }

    public function setRule(?string $rule): self
    {
        $this->rule = $rule;

        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }
}
