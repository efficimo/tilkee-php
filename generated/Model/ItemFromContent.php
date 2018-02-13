<?php

namespace HbsResearch\Tilkee\API\Model;

class ItemFromContent
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title = null)
    {
        $this->title = $title;
        return $this;
    }
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent($content = null)
    {
        $this->content = $content;
        return $this;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }
    /**
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId($externalId = null)
    {
        $this->externalId = $externalId;
        return $this;
    }
}