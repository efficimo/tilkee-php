<?php

namespace HbsResearch\Tilkee\API\Model;

class Connexion
{
    /**
     * @var Project|null
     */
    protected $project;

    /**
     * @return Project|null
     */
    public function getProject(): ?Project
    {
        return $this->project;
    }

    /**
     * @param Project|null $project
     *
     * @return self
     */
    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }
}
