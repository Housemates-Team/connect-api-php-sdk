<?php

namespace Housemates\ConnectApi;

use Housemates\ConnectApi\Exceptions\ConfigurationException;
use Housemates\ConnectApi\Filters\PropertyFilter;
use OpenAPI\Client\Api\PropertiesApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration as OpenApiConfig;

class Sdk
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
     * @throws ConfigurationException
     */
    public static function make(Configuration $config): Sdk
    {
        return new self($config);
    }

    /**
     * @throws ApiException
     */
    public function getProperties(
        PropertyFilter $filters = null
    ) {

        $apiInstance = new PropertiesApi(
            $this->config->getClient(), $this->openApiConfig
        );

        if (null === $filters) {
            return $apiInstance->getProperties(
                $this->config->getApiPartnerId(),
            );
        }

        return $apiInstance->getProperties(
            $this->config->getApiPartnerId(),
            $filters->getCityFilter(),
            $filters->getSlugFilter(),
            $filters->getAmenitiesFilter(),
            $filters->getPerPage(),
        );
    }
}
