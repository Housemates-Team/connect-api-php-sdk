<?php

namespace Housemates\ConnectApi\Exceptions;

use Exception;

class ApiException extends Exception
{
    public static function because($message): ApiException
    {
        return new self($message);
    }
}