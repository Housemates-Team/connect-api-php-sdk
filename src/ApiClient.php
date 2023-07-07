<?php

namespace Housemates\ConnectApi;

use Housemates\ConnectApi\Api\PropertyApi;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Exceptions\ConfigurationException;
use Housemates\ConnectApi\Filters\PropertyFilter;
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
}
