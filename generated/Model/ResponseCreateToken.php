<?php

namespace HbsResearch\Tilkee\API\Model;

class ResponseCreateToken
{
    /**
     * @var Token[]|null
     */
    protected $contents;

    /**
     * @return Token[]|null
     */
    public function getContents(): ?array
    {
        return $this->contents;
    }

    /**
     * @param Token[]|null $contents
     */
    public function setContents(?array $contents): self
    {
        $this->contents = $contents;

        return $this;
    }
}
