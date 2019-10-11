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

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getExternalId(): ?int
    {
        return $this->externalId;
    }

    /**
     * @param int|null $externalId
     *
     * @return self
     */
    public function setExternalId(?int $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }
}
