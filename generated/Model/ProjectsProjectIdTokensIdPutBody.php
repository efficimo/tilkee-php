<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectsProjectIdTokensIdPutBody
{
    /**
     * Update your project name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Specify if the tilk succeeded.
     *
     * @var bool|null
     */
    protected $won;
    /**
     * @var string|null
     */
    protected $extenalId;

    /**
     * Update your project name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Update your project name.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Specify if the tilk succeeded.
     */
    public function getWon(): ?bool
    {
        return $this->won;
    }

    /**
     * Specify if the tilk succeeded.
     */
    public function setWon(?bool $won): self
    {
        $this->won = $won;

        return $this;
    }

    public function getExtenalId(): ?string
    {
        return $this->extenalId;
    }

    public function setExtenalId(?string $extenalId): self
    {
        $this->extenalId = $extenalId;

        return $this;
    }
}
