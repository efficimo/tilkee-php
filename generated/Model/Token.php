<?php

namespace Tilkee\API\Model;

class Token
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $projectName;
    /**
     * @var string
     */
    protected $link;
    /**
     * @var string
     */
    protected $won;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var bool
     */
    protected $consulted;
    /**
     * @var string
     */
    protected $signedStatus;
    /**
     * @var \DateTime
     */
    protected $archivedAt;
    /**
     * @var bool
     */
    protected $signed;
    /**
     * @var TokenSignedDocsItem[]
     */
    protected $signedDocs;
    /**
     * @var int
     */
    protected $interest;
    /**
     * @var int
     */
    protected $projectId;
    /**
     * @var string
     */
    protected $previewUrl;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @var bool
     */
    protected $generatedByProspect;
    /**
     * @var \DateTime
     */
    protected $firstAccessAt;
    /**
     * @var int
     */
    protected $totalTime;
    /**
     * @var \DateTime|mixed
     */
    protected $lastSignInAt;
    /**
     * @var int
     */
    protected $nbConnections;
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
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }
    /**
     * @param string $projectName
     *
     * @return self
     */
    public function setProjectName($projectName = null)
    {
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
    /**
     * @param string $link
     *
     * @return self
     */
    public function setLink($link = null)
    {
        $this->link = $link;
        return $this;
    }
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
     * @return bool
     */
    public function getConsulted()
    {
        return $this->consulted;
    }
    /**
     * @param bool $consulted
     *
     * @return self
     */
    public function setConsulted($consulted = null)
    {
        $this->consulted = $consulted;
        return $this;
    }
    /**
     * @return string
     */
    public function getSignedStatus()
    {
        return $this->signedStatus;
    }
    /**
     * @param string $signedStatus
     *
     * @return self
     */
    public function setSignedStatus($signedStatus = null)
    {
        $this->signedStatus = $signedStatus;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getArchivedAt()
    {
        return $this->archivedAt;
    }
    /**
     * @param \DateTime $archivedAt
     *
     * @return self
     */
    public function setArchivedAt(\DateTime $archivedAt = null)
    {
        $this->archivedAt = $archivedAt;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSigned()
    {
        return $this->signed;
    }
    /**
     * @param bool $signed
     *
     * @return self
     */
    public function setSigned($signed = null)
    {
        $this->signed = $signed;
        return $this;
    }
    /**
     * @return TokenSignedDocsItem[]
     */
    public function getSignedDocs()
    {
        return $this->signedDocs;
    }
    /**
     * @param TokenSignedDocsItem[] $signedDocs
     *
     * @return self
     */
    public function setSignedDocs(array $signedDocs = null)
    {
        $this->signedDocs = $signedDocs;
        return $this;
    }
    /**
     * @return int
     */
    public function getInterest()
    {
        return $this->interest;
    }
    /**
     * @param int $interest
     *
     * @return self
     */
    public function setInterest($interest = null)
    {
        $this->interest = $interest;
        return $this;
    }
    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId($projectId = null)
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->previewUrl;
    }
    /**
     * @param string $previewUrl
     *
     * @return self
     */
    public function setPreviewUrl($previewUrl = null)
    {
        $this->previewUrl = $previewUrl;
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
     * @return bool
     */
    public function getGeneratedByProspect()
    {
        return $this->generatedByProspect;
    }
    /**
     * @param bool $generatedByProspect
     *
     * @return self
     */
    public function setGeneratedByProspect($generatedByProspect = null)
    {
        $this->generatedByProspect = $generatedByProspect;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getFirstAccessAt()
    {
        return $this->firstAccessAt;
    }
    /**
     * @param \DateTime $firstAccessAt
     *
     * @return self
     */
    public function setFirstAccessAt(\DateTime $firstAccessAt = null)
    {
        $this->firstAccessAt = $firstAccessAt;
        return $this;
    }
    /**
     * @return int
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }
    /**
     * @param int $totalTime
     *
     * @return self
     */
    public function setTotalTime($totalTime = null)
    {
        $this->totalTime = $totalTime;
        return $this;
    }
    /**
     * @return \DateTime|mixed
     */
    public function getLastSignInAt()
    {
        return $this->lastSignInAt;
    }
    /**
     * @param \DateTime|mixed $lastSignInAt
     *
     * @return self
     */
    public function setLastSignInAt($lastSignInAt = null)
    {
        $this->lastSignInAt = $lastSignInAt;
        return $this;
    }
    /**
     * @return int
     */
    public function getNbConnections()
    {
        return $this->nbConnections;
    }
    /**
     * @param int $nbConnections
     *
     * @return self
     */
    public function setNbConnections($nbConnections = null)
    {
        $this->nbConnections = $nbConnections;
        return $this;
    }
}