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

    /**
     * @return Token|null
     */
    public function getToken(): ?Token
    {
        return $this->token;
    }

    /**
     * @param Token|null $token
     *
     * @return self
     */
    public function setToken(?Token $token): self
    {
        $this->token = $token;

        return $this;
    }
}
