<?php

namespace HbsResearch\Tilkee\API\Model;

class WrapperTokenFromFilesPostResponse200
{
    /**
     * @var Project|null
     */
    protected $project;
    /**
     * @var Token|null
     */
    protected $token;

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getToken(): ?Token
    {
        return $this->token;
    }

    public function setToken(?Token $token): self
    {
        $this->token = $token;

        return $this;
    }
}
