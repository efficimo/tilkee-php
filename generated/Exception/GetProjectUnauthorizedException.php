<?php

namespace HbsResearch\Tilkee\API\Exception;

class GetProjectUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}
