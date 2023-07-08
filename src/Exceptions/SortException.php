<?php

namespace Housemates\ConnectApi\Exceptions;

use Exception;

class SortException extends Exception
{
    public static function because(string $message): self
    {
        return new static($message);
    }
}