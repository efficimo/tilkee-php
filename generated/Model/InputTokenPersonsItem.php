<?php

namespace HbsResearch\Tilkee\API\Model;

class InputTokenPersonsItem
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $externalId;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }
}
