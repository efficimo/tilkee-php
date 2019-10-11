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
     *
     * @return string|null
     */
    public function getSearch(): ?string
    {
        return $this->search;
    }

    /**
     * Name.
     *
     * @param string|null $search
     *
     * @return self
     */
    public function setSearch(?string $search): self
    {
        $this->search = $search;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int|null $limit
     *
     * @return self
     */
    public function setLimit(?int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @param int|null $offset
     *
     * @return self
     */
    public function setOffset(?int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * @param string|null $order
     *
     * @return self
     */
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
     *
     * @return self
     */
    public function setContents(?array $contents): self
    {
        $this->contents = $contents;

        return $this;
    }
}
