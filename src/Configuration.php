<?php

namespace Housemates\ConnectApi;


use GuzzleHttp\ClientInterface;
use Housemates\ConnectApi\Contracts\Configurable;
use OpenAPI\Client\Configuration as OpenApiConfiguration;

final class Configuration extends OpenApiConfiguration implements Configurable
{
    protected $client;

    protected $api_partner_id;

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param  mixed  $client
     * @return Configuration
     */
    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApiPartnerId()
    {
        return $this->api_partner_id;
    }

    /**
     * @param  mixed  $api_partner_id
     * @return Configuration
     */
    public function setApiPartnerId($api_partner_id)
    {
        $this->api_partner_id = $api_partner_id;
        return $this;
    }


}