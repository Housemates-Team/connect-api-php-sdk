<?php

namespace Housemates\ConnectApi\Contracts;

use Housemates\ConnectApi\Response\Response;

interface LocationContract
{
    public function getCities(): Response;

    public function getUniversities(): Response;

    public function getCity(string $city_slug): Response;
}