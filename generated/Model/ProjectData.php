<?php

namespace HbsResearch\Tilkee\API\Model;

class ProjectData
{
    /**
     * @var mixed|null
     */
    protected $interest;
    /**
     * @var int|null
     */
    protected $nbConnections;
    /**
     * @var int|null
     */
    protected $totalTime;
    /**
     * @var int|null
     */
    protected $medianNbPagesReaded;
    /**
     * @var int|null
     */
    protected $medianPercentageRead;
    /**
     * @var int|null
     */
    protected $medianTimeBeforeOpening;
    /**
     * @var int|null
     */
    protected $medianTimeRead;
    /**
     * @var int|null
     */
    protected $medianTimeToDownload;
    /**
     * @var int|null
     */
    protected $nbConnexionsFailed;
    /**
     * @var mixed|null
     */
    protected $ptNote;

    /**
     * @return mixed
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * @param mixed $interest
     */
    public function setInterest($interest): self
    {
        $this->interest = $interest;

        return $this;
    }

    public function getNbConnections(): ?int
    {
        return $this->nbConnections;
    }

    public function setNbConnections(?int $nbConnections): self
    {
        $this->nbConnections = $nbConnections;

        return $this;
    }

    public function getTotalTime(): ?int
    {
        return $this->totalTime;
    }

    public function setTotalTime(?int $totalTime): self
    {
        $this->totalTime = $totalTime;

        return $this;
    }

    public function getMedianNbPagesReaded(): ?int
    {
        return $this->medianNbPagesReaded;
    }

    public function setMedianNbPagesReaded(?int $medianNbPagesReaded): self
    {
        $this->medianNbPagesReaded = $medianNbPagesReaded;

        return $this;
    }

    public function getMedianPercentageRead(): ?int
    {
        return $this->medianPercentageRead;
    }

    public function setMedianPercentageRead(?int $medianPercentageRead): self
    {
        $this->medianPercentageRead = $medianPercentageRead;

        return $this;
    }

    public function getMedianTimeBeforeOpening(): ?int
    {
        return $this->medianTimeBeforeOpening;
    }

    public function setMedianTimeBeforeOpening(?int $medianTimeBeforeOpening): self
    {
        $this->medianTimeBeforeOpening = $medianTimeBeforeOpening;

        return $this;
    }

    public function getMedianTimeRead(): ?int
    {
        return $this->medianTimeRead;
    }

    public function setMedianTimeRead(?int $medianTimeRead): self
    {
        $this->medianTimeRead = $medianTimeRead;

        return $this;
    }

    public function getMedianTimeToDownload(): ?int
    {
        return $this->medianTimeToDownload;
    }

    public function setMedianTimeToDownload(?int $medianTimeToDownload): self
    {
        $this->medianTimeToDownload = $medianTimeToDownload;

        return $this;
    }

    public function getNbConnexionsFailed(): ?int
    {
        return $this->nbConnexionsFailed;
    }

    public function setNbConnexionsFailed(?int $nbConnexionsFailed): self
    {
        $this->nbConnexionsFailed = $nbConnexionsFailed;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPtNote()
    {
        return $this->ptNote;
    }

    /**
     * @param mixed $ptNote
     */
    public function setPtNote($ptNote): self
    {
        $this->ptNote = $ptNote;

        return $this;
    }
}
