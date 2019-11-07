<?php

namespace HbsResearch\Tilkee\API\Model;

class InputToken
{
    /**
     * @var InputTokenPersonsItem[]|null
     */
    protected $persons;

    /**
     * @return InputTokenPersonsItem[]|null
     */
    public function getPersons(): ?array
    {
        return $this->persons;
    }

    /**
     * @param InputTokenPersonsItem[]|null $persons
     */
    public function setPersons(?array $persons): self
    {
        $this->persons = $persons;

        return $this;
    }
}
