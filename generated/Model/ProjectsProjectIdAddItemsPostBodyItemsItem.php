<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectsProjectIdAddItemsPostBodyItemsItem
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var bool|null
     */
    protected $signable;

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
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSignable(): ?bool
    {
        return $this->signable;
    }

    /**
     * @param bool|null $signable
     *
     * @return self
     */
    public function setSignable(?bool $signable): self
    {
        $this->signable = $signable;

        return $this;
    }
}
