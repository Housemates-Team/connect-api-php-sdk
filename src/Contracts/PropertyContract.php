<?php

namespace Housemates\ConnectApi\Contracts;

use Housemates\ConnectApi\Filters\PropertyFilter;
use Housemates\ConnectApi\Response\Response;

interface PropertyContract
{
    public function getProperties(?PropertyFilter $filters): Response;

    public function getProperty(string $propertyId): Response;

}