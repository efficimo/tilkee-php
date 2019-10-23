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
     *
     * @return self
     */
    public function setInterest($interest): self
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbConnections(): ?int
    {
        return $this->nbConnections;
    }

    /**
     * @param int|null $nbConnections
     *
     * @return self
     */
    public function setNbConnections(?int $nbConnections): self
    {
        $this->nbConnections = $nbConnections;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalTime(): ?int
    {
        return $this->totalTime;
    }

    /**
     * @param int|null $totalTime
     *
     * @return self
     */
    public function setTotalTime(?int $totalTime): self
    {
        $this->totalTime = $totalTime;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMedianNbPagesReaded(): ?int
    {
        return $this->medianNbPagesReaded;
    }

    /**
     * @param int|null $medianNbPagesReaded
     *
     * @return self
     */
    public function setMedianNbPagesReaded(?int $medianNbPagesReaded): self
    {
        $this->medianNbPagesReaded = $medianNbPagesReaded;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMedianPercentageRead(): ?int
    {
        return $this->medianPercentageRead;
    }

    /**
     * @param int|null $medianPercentageRead
     *
     * @return self
     */
    public function setMedianPercentageRead(?int $medianPercentageRead): self
    {
        $this->medianPercentageRead = $medianPercentageRead;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMedianTimeBeforeOpening(): ?int
    {
        return $this->medianTimeBeforeOpening;
    }

    /**
     * @param int|null $medianTimeBeforeOpening
     *
     * @return self
     */
    public function setMedianTimeBeforeOpening(?int $medianTimeBeforeOpening): self
    {
        $this->medianTimeBeforeOpening = $medianTimeBeforeOpening;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMedianTimeRead(): ?int
    {
        return $this->medianTimeRead;
    }

    /**
     * @param int|null $medianTimeRead
     *
     * @return self
     */
    public function setMedianTimeRead(?int $medianTimeRead): self
    {
        $this->medianTimeRead = $medianTimeRead;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMedianTimeToDownload(): ?int
    {
        return $this->medianTimeToDownload;
    }

    /**
     * @param int|null $medianTimeToDownload
     *
     * @return self
     */
    public function setMedianTimeToDownload(?int $medianTimeToDownload): self
    {
        $this->medianTimeToDownload = $medianTimeToDownload;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbConnexionsFailed(): ?int
    {
        return $this->nbConnexionsFailed;
    }

    /**
     * @param int|null $nbConnexionsFailed
     *
     * @return self
     */
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
     *
     * @return self
     */
    public function setPtNote($ptNote): self
    {
        $this->ptNote = $ptNote;

        return $this;
    }
}
