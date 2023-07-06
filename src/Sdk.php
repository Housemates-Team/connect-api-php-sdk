<?php

namespace Housemates\ConnectApi;

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
        $this->config = $config;
        $this->openApiConfig = OpenApiConfig::getDefaultConfiguration();
        $this->openApiConfig->setHost($config->getHost());
        $this->openApiConfig->setAccessToken($config->getAccessToken());
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
