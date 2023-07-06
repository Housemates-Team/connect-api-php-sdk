<?php

namespace Housemates\ConnectApi\Exceptions;

use Exception;

class ConfigurationException extends Exception
{
    public static function because($message): ConfigurationException
    {
        return new self($message);
    }
}