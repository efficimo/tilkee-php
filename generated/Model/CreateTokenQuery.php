<?php

namespace HbsResearch\Tilkee\API\Model;

class CreateTokenQuery
{
    /**
     * @var TokenRecipient[]
     */
    protected $persons;
    /**
     * @return TokenRecipient[]
     */
    public function getPersons()
    {
        return $this->persons;
    }
    /**
     * @param TokenRecipient[] $persons
     *
     * @return self
     */
    public function setPersons(array $persons = null)
    {
        $this->persons = $persons;
        return $this;
    }
}