<?php

namespace Housemates\ConnectApi\Contracts;

interface Configurable
{
    public function setHost(string $apiKey);
    public function getHost();
    public function setAccessToken(string $accessToken);
    public function getAccessToken();
}