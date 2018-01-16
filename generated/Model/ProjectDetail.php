<?php

namespace Tilkee\API\Model;

class ProjectDetail
{
    /**
     * @var Leader
     */
    protected $leader;
    /**
     * @var Collaborator[]
     */
    protected $collaborators;
    /**
     * @var Theme
     */
    protected $theme;
    /**
     * @return Leader
     */
    public function getLeader()
    {
        return $this->leader;
    }
    /**
     * @param Leader $leader
     *
     * @return self
     */
    public function setLeader(Leader $leader = null)
    {
        $this->leader = $leader;
        return $this;
    }
    /**
     * @return Collaborator[]
     */
    public function getCollaborators()
    {
        return $this->collaborators;
    }
    /**
     * @param Collaborator[] $collaborators
     *
     * @return self
     */
    public function setCollaborators(array $collaborators = null)
    {
        $this->collaborators = $collaborators;
        return $this;
    }
    /**
     * @return Theme
     */
    public function getTheme()
    {
        return $this->theme;
    }
    /**
     * @param Theme $theme
     *
     * @return self
     */
    public function setTheme(Theme $theme = null)
    {
        $this->theme = $theme;
        return $this;
    }
}