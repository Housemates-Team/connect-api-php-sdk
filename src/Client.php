<?php

namespace Housemates\ConnectApi;

use GuzzleHttp\Client as GuzzleClient;

final class Client implements \GuzzleHttp\ClientInterface
{
    /**
     * @var GuzzleClient|\GuzzleHttp\ClientInterface
     */
    protected $client;

    public function __construct(
        \GuzzleHttp\ClientInterface $client = null
    ) {
        $this->client = $client ?? new GuzzleClient();
    }

    /**
     * @return GuzzleClient|\GuzzleHttp\ClientInterface
     */
    public function getClient()
    {
        return $this->client;
    }
}