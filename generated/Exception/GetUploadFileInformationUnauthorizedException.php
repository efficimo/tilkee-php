<?php

namespace HbsResearch\Tilkee\API\Exception;

class GetUploadFileInformationUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}
