<?php

namespace HbsResearch\Tilkee\API\Model;

class ResponseItemList
{
    /**
     * Name.
     *
     * @var string|null
     */
    protected $search;
    /**
     * @var int|null
     */
    protected $limit;
    /**
     * @var int|null
     */
    protected $offset;
    /**
     * @var int|null
     */
    protected $total;
    /**
     * @var string|null
     */
    protected $order;
    /**
     * @var ItemWithOwnership[]|null
     */
    protected $contents;

    /**
     * Name.
     */
    public function getSearch(): ?string
    {
        return $this->search;
    }

    /**
     * Name.
     */
    public function setSearch(?string $search): self
    {
        $this->search = $search;

        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(?int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function getOffset(): ?int
    {
        return $this->offset;
    }

    public function setOffset(?int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return ItemWithOwnership[]|null
     */
    public function getContents(): ?array
    {
        return $this->contents;
    }

    /**
     * @param ItemWithOwnership[]|null $contents
     */
    public function setContents(?array $contents): self
    {
        $this->contents = $contents;

        return $this;
    }
}
