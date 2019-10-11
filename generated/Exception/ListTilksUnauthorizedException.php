<?php

namespace HbsResearch\Tilkee\API\Exception;

class ListTilksUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}
