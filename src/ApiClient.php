<?php

namespace Housemates\ConnectApi;

use Housemates\ConnectApi\Api\CheckoutApi;
use Housemates\ConnectApi\Api\PropertyApi;
use Housemates\ConnectApi\Api\RoomApi;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Exceptions\ConfigurationException;
use Housemates\ConnectApi\Filters\PropertyFilter;
use Housemates\ConnectApi\Filters\RoomFilter;
use Housemates\ConnectApi\Requests\CheckoutStartRequest;
use Housemates\ConnectApi\Sorts\RoomSort;
use OpenAPI\Client\Configuration as OpenApiConfig;

class ApiClient
{
    protected Configuration $config;

    protected OpenApiConfig $openApiConfig;

    public function __construct(Configuration $config)
    {
        if (null === $config->getHost()) {
            throw ConfigurationException::because('Host is not set');
        }
        if (null === $config->getAccessToken()) {
            throw ConfigurationException::because('Access token is not set');
        }
        if (null === $config->getApiPartnerId()) {
            throw ConfigurationException::because('Api partner id is not set');
        }

        $this->config = $config;
        $this->openApiConfig = OpenApiConfig::getDefaultConfiguration();
        $this->openApiConfig->setHost($config->getHost());
        $this->openApiConfig->setAccessToken($config->getAccessToken());
    }

    /**
     * @throws HousematesApiException
     */
    public function getProperties(
        PropertyFilter $filters = null
    ) {
        return PropertyApi::make(
            $this->config,
            $this->openApiConfig
        )->getProperties($filters);
    }

    /**
     * @throws ConfigurationException
     */
    public static function make(Configuration $config): self
    {
        return new self($config);
    }

    /**
     * @throws HousematesApiException
     */
    public function getProperty(string $propertyId)
    {
        return PropertyApi::make(
            $this->config,
            $this->openApiConfig
        )->getProperty($propertyId);
    }

    public function getRooms(
        RoomFilter $filters = null,
        RoomSort $sort = null
    ) {
        return RoomApi::make(
            $this->config,
            $this->openApiConfig
        )->getRooms($filters, $sort);
    }

    public function getRoom(string $roomId)
    {
        return RoomApi::make(
            $this->config,
            $this->openApiConfig
        )->getRoom($roomId);
    }

    public function getRoomBookingPeriods(string $roomId)
    {
        return RoomApi::make(
            $this->config,
            $this->openApiConfig
        )->getRoomBookingPeriods($roomId);
    }

    public function startCheckout(CheckoutStartRequest $request)
    {
        return CheckoutApi::make(
            $this->config,
            $this->openApiConfig
        )->start($request);
    }
}
