<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectListResponse
{
    /**
     * @var string
     */
    protected $search;
    /**
     * @var int
     */
    protected $limit;
    /**
     * @var int
     */
    protected $offset;
    /**
     * @var int
     */
    protected $total;
    /**
     * @var string
     */
    protected $order;
    /**
     * @var Project[]
     */
    protected $contents;
    /**
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }
    /**
     * @param string $search
     *
     * @return self
     */
    public function setSearch($search = null)
    {
        $this->search = $search;
        return $this;
    }
    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * @param int $limit
     *
     * @return self
     */
    public function setLimit($limit = null)
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * @param int $offset
     *
     * @return self
     */
    public function setOffset($offset = null)
    {
        $this->offset = $offset;
        return $this;
    }
    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * @param int $total
     *
     * @return self
     */
    public function setTotal($total = null)
    {
        $this->total = $total;
        return $this;
    }
    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * @param string $order
     *
     * @return self
     */
    public function setOrder($order = null)
    {
        $this->order = $order;
        return $this;
    }
    /**
     * @return Project[]
     */
    public function getContents()
    {
        return $this->contents;
    }
    /**
     * @param Project[] $contents
     *
     * @return self
     */
    public function setContents(array $contents = null)
    {
        $this->contents = $contents;
        return $this;
    }
}