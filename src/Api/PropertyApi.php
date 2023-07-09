<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Filters\PropertyFilter;
use Housemates\ConnectApi\Response\Response;
use OpenAPI\Client\Api\PropertiesApi;
use OpenAPI\Client\ApiException;

class PropertyApi extends BaseApi
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
                $filters->getPerPage(),
            ];

            $response =  $apiInstance->getProperties(...$args);
            return Response::make($response);

        } catch (ApiException $e) {
            throw HousematesApiException::because(
                sprintf('ApiException: %s %s', $e->getCode(), $e->getMessage())
            );
        } catch (Exception $e) {
            throw HousematesApiException::because($e->getMessage());
        }

    }

    protected function getApiInstance(): PropertiesApi
    {
        return new PropertiesApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }

    public function getProperty(string $propertyId): Response
    {
        try {
            $response = $this->getApiInstance()->getProperty(
                $this->config->getApiPartnerId(),
                $propertyId,
            );
            return Response::make($response);
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