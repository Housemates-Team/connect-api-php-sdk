<?php

namespace Housemates\ConnectApi\Contracts;

use Housemates\ConnectApi\Filters\LocationFilter;
use Housemates\ConnectApi\Response\Response;

interface LocationContract
{
    public function getCities(?LocationFilter $locationFilter): Response;

    public function getUniversities(?LocationFilter $locationFilter): Response;

}