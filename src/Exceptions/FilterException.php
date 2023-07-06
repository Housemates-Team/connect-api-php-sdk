<?php

namespace Housemates\ConnectApi\Exceptions;

use Exception;

class FilterException extends Exception
{
   public static function because(string $message): self
   {
       return new self($message);
   }
}