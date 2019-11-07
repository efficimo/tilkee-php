<?php

namespace HbsResearch\Tilkee\API\Model;

class TokenSignedDocsItem
{
    /**
     * @var int|null
     */
    protected $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
