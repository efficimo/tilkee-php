<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectsProjectIdArchivePostBody
{
    /**
     * @var string|null
     */
    protected $won;

    public function getWon(): ?string
    {
        return $this->won;
    }

    public function setWon(?string $won): self
    {
        $this->won = $won;

        return $this;
    }
}
