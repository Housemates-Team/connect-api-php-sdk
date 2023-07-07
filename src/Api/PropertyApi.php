<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Filters\PropertyFilter;
use OpenAPI\Client\Api\PropertiesApi;
use OpenAPI\Client\ApiException;

class PropertyApi extends BaseApi
{
    public function getProperties(
        PropertyFilter $filters = null
    ) {

        if (null === $filters) {
            try {
                return $this->getApiInstance()->getProperties(
                    $this->config->getApiPartnerId(),
                );
            } catch (ApiException $e) {
                throw HousematesApiException::because(
                    sprintf(
                        'ApiException: %s %s',
                        $e->getCode(),
                        $e->getMessage()
                    ),
                );
            } catch (Exception $e) {
                throw HousematesApiException::because(
                    $e->getMessage()
                );
            }

        }

        try {
            return $this->getApiInstance()->getProperties(
                $this->config->getApiPartnerId(),
                $filters->getCityFilter(),
                $filters->getSlugFilter(),
                $filters->getAmenitiesFilter(),
                $filters->getPerPage(),
            );
        } catch (ApiException $e) {
            throw HousematesApiException::because(
                sprintf(
                    'ApiException: %s %s',
                    $e->getCode(),
                    $e->getMessage()
                ),
            );
        } catch (Exception $e) {
            throw HousematesApiException::because(
                $e->getMessage()
            );
        }

    }

    protected function getApiInstance(): PropertiesApi
    {
        return new PropertiesApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }

    public function getProperty(string $propertyId)
    {
        $apiInstance = new PropertiesApi(
            $this->config->getClient(), $this->openApiConfig
        );

        try {
            return $apiInstance->getProperty(
                $this->config->getApiPartnerId(),
                $propertyId,
            );
        } catch (ApiException $e) {
            throw HousematesApiException::because(
                sprintf(
                    'ApiException: %s %s',
                    $e->getCode(),
                    $e->getMessage()
                ),
            );
        } catch (Exception $e) {
            throw HousematesApiException::because(
                $e->getMessage()
            );
        }
    }
}