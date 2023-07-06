<?php

namespace Housemates\ConnectApi;

use Housemates\ConnectApi\Filters\PropertyFilter;
use OpenAPI\Client\Api\PropertiesApi;
use OpenAPI\Client\ApiException;

class ConnectApi
{

    protected Configuration $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    /**
     * @throws ApiException
     */
    public function getProperties(
        PropertyFilter $filters = null
    ) {

        $apiInstance = new PropertiesApi(
            $this->config->getClient(), $this->config
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
