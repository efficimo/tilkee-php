<?php

namespace HbsResearch\Tilkee\API\Model;

class NotificationsGetResponse200
{
    /**
     * @var Notification[]|null
     */
    protected $contents;

    /**
     * @return Notification[]|null
     */
    public function getContents(): ?array
    {
        return $this->contents;
    }

    /**
     * @param Notification[]|null $contents
     */
    public function setContents(?array $contents): self
    {
        $this->contents = $contents;

        return $this;
    }
}
