<?php

namespace HbsResearch\Tilkee\API\Model;

class WrapperTokenFromFilesPostBody
{
    /**
     * @var InputProject|null
     */
    protected $project;
    /**
     * @var WrapperTokenFromFilesPostBodyDocumentsItem[]|null
     */
    protected $documents;

    /**
     * @return InputProject|null
     */
    public function getProject(): ?InputProject
    {
        return $this->project;
    }

    /**
     * @param InputProject|null $project
     *
     * @return self
     */
    public function setProject(?InputProject $project): self
    {
        $this->project = $project;

        return $this;
    }

    /**
     * @return WrapperTokenFromFilesPostBodyDocumentsItem[]|null
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * @param WrapperTokenFromFilesPostBodyDocumentsItem[]|null $documents
     *
     * @return self
     */
    public function setDocuments(?array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }
}
