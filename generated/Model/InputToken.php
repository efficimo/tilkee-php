<?php

namespace Tilkee\API\Model;

class InputToken
{
    /**
     * @var InputTokenPersonsItem[]
     */
    protected $persons;
    /**
     * @return InputTokenPersonsItem[]
     */
    public function getPersons()
    {
        return $this->persons;
    }
    /**
     * @param InputTokenPersonsItem[] $persons
     *
     * @return self
     */
    public function setPersons(array $persons = null)
    {
        $this->persons = $persons;
        return $this;
    }
}