<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectsProjectIdArchivePostBody
{
    /**
     * @var string|null
     */
    protected $won;

    /**
     * @return string|null
     */
    public function getWon(): ?string
    {
        return $this->won;
    }

    /**
     * @param string|null $won
     *
     * @return self
     */
    public function setWon(?string $won): self
    {
        $this->won = $won;

        return $this;
    }
}
