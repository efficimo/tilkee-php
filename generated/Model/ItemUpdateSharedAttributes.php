<?php

namespace HbsResearch\Tilkee\API\Model;

class ItemUpdateSharedAttributes
{
    /**
     * @var bool|null
     */
    protected $all = false;
    /**
     * @var bool|null
     */
    protected $team = false;
    /**
     * @var mixed[]|null
     */
    protected $userIds = [];

    public function getAll(): ?bool
    {
        return $this->all;
    }

    public function setAll(?bool $all): self
    {
        $this->all = $all;

        return $this;
    }

    public function getTeam(): ?bool
    {
        return $this->team;
    }

    public function setTeam(?bool $team): self
    {
        $this->team = $team;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getUserIds(): ?array
    {
        return $this->userIds;
    }

    /**
     * @param mixed[]|null $userIds
     */
    public function setUserIds(?array $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }
}
