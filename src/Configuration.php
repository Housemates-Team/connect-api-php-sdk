<?php

namespace Housemates\ConnectApi;


use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use Housemates\ConnectApi\Contracts\Configurable;

final class Configuration implements Configurable
{
    protected ?ClientInterface $client = null;

    protected ?string $access_token = null;

    protected string $host = 'https://api.housemates.io';

    protected ?string $api_partner_id = null;

    public static function make(): Configuration
    {
        return new self();
    }

    public function getClient(): ClientInterface
    {
        return $this->client ?? new GuzzleClient();
    }

    public function setClient(ClientInterface $client): Configuration
    {
        $this->client = $client;
        return $this;
    }

    public function getApiPartnerId(): ?string
    {
        return $this->api_partner_id;
    }

    public function setApiPartnerId($api_partner_id): Configuration
    {
        $this->api_partner_id = $api_partner_id;
        return $this;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function setHost(?string $host): Configuration
    {
        if (null !== $host) {
            $this->host = $host;
        }
        return $this;
    }

    public function getAccessToken(): ?string
    {
        return $this->access_token;
    }

    public function setAccessToken(string $accessToken): Configuration
    {
        $this->access_token = $accessToken;
        return $this;
    }
}