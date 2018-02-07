<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectsProjectIdTokensIdPutBody
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $won;
    /**
     * @var string
     */
    protected $extenalId;
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
     * @return bool
     */
    public function getWon()
    {
        return $this->won;
    }
    /**
     * @param bool $won
     *
     * @return self
     */
    public function setWon($won = null)
    {
        $this->won = $won;
        return $this;
    }
    /**
     * @return string
     */
    public function getExtenalId()
    {
        return $this->extenalId;
    }
    /**
     * @param string $extenalId
     *
     * @return self
     */
    public function setExtenalId($extenalId = null)
    {
        $this->extenalId = $extenalId;
        return $this;
    }
}