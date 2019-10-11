<?php

namespace HbsResearch\Tilkee\API\Exception;

class AddItemToProjectBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Bad Request', 400);
    }
}
