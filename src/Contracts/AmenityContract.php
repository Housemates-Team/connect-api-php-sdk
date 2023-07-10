<?php

namespace Housemates\ConnectApi\Contracts;

use Housemates\ConnectApi\Filters\AmenityFilter;

interface AmenityContract
{
    public function get(AmenityFilter $amenityFilter = null);
}