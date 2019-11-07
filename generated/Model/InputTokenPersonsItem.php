<?php

namespace HbsResearch\Tilkee\API\Model;

class InputTokenPersonsItem
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var int|null
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

    public function getExternalId(): ?int
    {
        return $this->externalId;
    }

    public function setExternalId(?int $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }
}
