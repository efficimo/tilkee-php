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
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Update your project name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Specify if the tilk succeeded.
     *
     * @return bool|null
     */
    public function getWon(): ?bool
    {
        return $this->won;
    }

    /**
     * Specify if the tilk succeeded.
     *
     * @param bool|null $won
     *
     * @return self
     */
    public function setWon(?bool $won): self
    {
        $this->won = $won;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtenalId(): ?string
    {
        return $this->extenalId;
    }

    /**
     * @param string|null $extenalId
     *
     * @return self
     */
    public function setExtenalId(?string $extenalId): self
    {
        $this->extenalId = $extenalId;

        return $this;
    }
}
