<?php

namespace HbsResearch\Tilkee\API\Model;

class ItemWithOwnershipprojectsItem
{
    /**
     * @var string|null
     */
    protected $name;

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
}
