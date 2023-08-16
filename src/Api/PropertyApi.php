<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Contracts\PropertyContract;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Filters\PropertyFilter;
use Housemates\ConnectApi\Response\Response;
use OpenAPI\Client\Api\PropertiesApi as OpenApiPropertiesApi;
use OpenAPI\Client\ApiException;

class PropertyApi extends BaseApi implements PropertyContract
{
    public function getProperties(
        PropertyFilter $filters = null
    ): Response {

        try {
            $apiInstance = $this->getApiInstance();
            $apiPartnerId = $this->config->getApiPartnerId();

            if (null === $filters) {
                $response = $apiInstance->getProperties($apiPartnerId);
                return Response::make($response);
            }

            $args = [
                $apiPartnerId,
                $filters->getCityFilter(),
                $filters->getSlugFilter(),
                $filters->getAmenitiesFilter(),
                $filters->getPerPageFilter(),
                $filters->getPageFilter()
            ];

            $response = $apiInstance->getProperties(...$args);
            return Response::make($response);

        } catch (ApiException $e) {
            throw $this->apiException($e);
        }

    }

    protected function getApiInstance(): OpenApiPropertiesApi
    {
        return new OpenApiPropertiesApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }

    /**
     * @throws HousematesApiException
     */
    public function getProperty(string $propertyId): Response
    {
        try {
            $response = $this->getApiInstance()->getProperty(
                $this->config->getApiPartnerId(),
                $propertyId,
            );
            return Response::make($response);
        } catch (ApiException $e) {
            throw $this->apiException($e);
        }
    }
}
