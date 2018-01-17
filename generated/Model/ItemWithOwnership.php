<?php

namespace Tilkee\API\Model;

class ItemWithOwnership
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var bool
     */
    protected $usable;
    /**
     * @var string
     */
    protected $elementType;
    /**
     * @var string
     */
    protected $extension;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @var string
     */
    protected $s3Url;
    /**
     * @var string
     */
    protected $contentUrl;
    /**
     * @var string
     */
    protected $thumbnailUrl;
    /**
     * @var bool
     */
    protected $visible;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var User
     */
    protected $owner;
    /**
     * @var ItemWithOwnershipprojectsItem[]
     */
    protected $projects;
    /**
     * @var int
     */
    protected $projectsCount;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
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
     * @return bool
     */
    public function getUsable()
    {
        return $this->usable;
    }
    /**
     * @param bool $usable
     *
     * @return self
     */
    public function setUsable($usable = null)
    {
        $this->usable = $usable;
        return $this;
    }
    /**
     * @return string
     */
    public function getElementType()
    {
        return $this->elementType;
    }
    /**
     * @param string $elementType
     *
     * @return self
     */
    public function setElementType($elementType = null)
    {
        $this->elementType = $elementType;
        return $this;
    }
    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }
    /**
     * @param string $extension
     *
     * @return self
     */
    public function setExtension($extension = null)
    {
        $this->extension = $extension;
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
    /**
     * @return string
     */
    public function getS3Url()
    {
        return $this->s3Url;
    }
    /**
     * @param string $s3Url
     *
     * @return self
     */
    public function setS3Url($s3Url = null)
    {
        $this->s3Url = $s3Url;
        return $this;
    }
    /**
     * @return string
     */
    public function getContentUrl()
    {
        return $this->contentUrl;
    }
    /**
     * @param string $contentUrl
     *
     * @return self
     */
    public function setContentUrl($contentUrl = null)
    {
        $this->contentUrl = $contentUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }
    /**
     * @param string $thumbnailUrl
     *
     * @return self
     */
    public function setThumbnailUrl($thumbnailUrl = null)
    {
        $this->thumbnailUrl = $thumbnailUrl;
        return $this;
    }
    /**
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }
    /**
     * @param bool $visible
     *
     * @return self
     */
    public function setVisible($visible = null)
    {
        $this->visible = $visible;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return User
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * @param User $owner
     *
     * @return self
     */
    public function setOwner(User $owner = null)
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * @return ItemWithOwnershipprojectsItem[]
     */
    public function getProjects()
    {
        return $this->projects;
    }
    /**
     * @param ItemWithOwnershipprojectsItem[] $projects
     *
     * @return self
     */
    public function setProjects(array $projects = null)
    {
        $this->projects = $projects;
        return $this;
    }
    /**
     * @return int
     */
    public function getProjectsCount()
    {
        return $this->projectsCount;
    }
    /**
     * @param int $projectsCount
     *
     * @return self
     */
    public function setProjectsCount($projectsCount = null)
    {
        $this->projectsCount = $projectsCount;
        return $this;
    }
}