<?php

namespace HbsResearch\Tilkee\API\Model;

class Theme
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $logo;
    /**
     * @var string
     */
    protected $mainColor;
    /**
     * @var string
     */
    protected $secondaryColor;
    /**
     * @var string
     */
    protected $textColor;
    /**
     * @var bool
     */
    protected $default;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }
    /**
     * @param string $logo
     *
     * @return self
     */
    public function setLogo($logo = null)
    {
        $this->logo = $logo;
        return $this;
    }
    /**
     * @return string
     */
    public function getMainColor()
    {
        return $this->mainColor;
    }
    /**
     * @param string $mainColor
     *
     * @return self
     */
    public function setMainColor($mainColor = null)
    {
        $this->mainColor = $mainColor;
        return $this;
    }
    /**
     * @return string
     */
    public function getSecondaryColor()
    {
        return $this->secondaryColor;
    }
    /**
     * @param string $secondaryColor
     *
     * @return self
     */
    public function setSecondaryColor($secondaryColor = null)
    {
        $this->secondaryColor = $secondaryColor;
        return $this;
    }
    /**
     * @return string
     */
    public function getTextColor()
    {
        return $this->textColor;
    }
    /**
     * @param string $textColor
     *
     * @return self
     */
    public function setTextColor($textColor = null)
    {
        $this->textColor = $textColor;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * @param bool $default
     *
     * @return self
     */
    public function setDefault($default = null)
    {
        $this->default = $default;
        return $this;
    }
}