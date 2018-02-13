<?php

namespace HbsResearch\Tilkee\Model;

use HbsResearch\Tilkee\API\Model\TokenRecipient as APITokenRecipient;

class TokenRecipient extends APITokenRecipient
{
    public function __construct($name = null, $externalId = null)
    {
        $this->name = $name;
        $this->externalId = $externalId;
    }
}