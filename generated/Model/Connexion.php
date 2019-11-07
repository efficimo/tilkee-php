<?php

namespace HbsResearch\Tilkee\API\Model;

class Connexion
{
    /**
     * @var Project|null
     */
    protected $project;

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }
}
