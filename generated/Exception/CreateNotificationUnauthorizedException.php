<?php

namespace HbsResearch\Tilkee\API\Exception;

class CreateNotificationUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}
