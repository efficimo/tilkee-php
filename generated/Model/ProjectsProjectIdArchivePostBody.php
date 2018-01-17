<?php

namespace Tilkee\API\Model;

class ProjectsProjectIdArchivePostBody
{
    /**
     * @var string
     */
    protected $won;
    /**
     * @return string
     */
    public function getWon()
    {
        return $this->won;
    }
    /**
     * @param string $won
     *
     * @return self
     */
    public function setWon($won = null)
    {
        $this->won = $won;
        return $this;
    }
}