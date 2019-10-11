<?php

namespace HbsResearch\Tilkee\API\Model;

class Theme
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $logo;
    /**
     * @var string|null
     */
    protected $mainColor;
    /**
     * @var string|null
     */
    protected $secondaryColor;
    /**
     * @var string|null
     */
    protected $textColor;
    /**
     * @var bool|null
     */
    protected $default;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
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
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param string|null $logo
     *
     * @return self
     */
    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMainColor(): ?string
    {
        return $this->mainColor;
    }

    /**
     * @param string|null $mainColor
     *
     * @return self
     */
    public function setMainColor(?string $mainColor): self
    {
        $this->mainColor = $mainColor;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSecondaryColor(): ?string
    {
        return $this->secondaryColor;
    }

    /**
     * @param string|null $secondaryColor
     *
     * @return self
     */
    public function setSecondaryColor(?string $secondaryColor): self
    {
        $this->secondaryColor = $secondaryColor;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextColor(): ?string
    {
        return $this->textColor;
    }

    /**
     * @param string|null $textColor
     *
     * @return self
     */
    public function setTextColor(?string $textColor): self
    {
        $this->textColor = $textColor;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDefault(): ?bool
    {
        return $this->default;
    }

    /**
     * @param bool|null $default
     *
     * @return self
     */
    public function setDefault(?bool $default): self
    {
        $this->default = $default;

        return $this;
    }
}
