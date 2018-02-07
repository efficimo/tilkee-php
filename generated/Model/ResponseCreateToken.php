<?php

namespace HbsResearch\Tilkee\API\Model;

class ResponseCreateToken
{
    /**
     * @var Token[]
     */
    protected $contents;
    /**
     * @return Token[]
     */
    public function getContents()
    {
        return $this->contents;
    }
    /**
     * @param Token[] $contents
     *
     * @return self
     */
    public function setContents(array $contents = null)
    {
        $this->contents = $contents;
        return $this;
    }
}