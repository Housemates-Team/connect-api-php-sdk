<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Contracts\LocationContract;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Response\Response;
use OpenAPI\Client\Api\LocationsApi as OpenApiLocationsApi;
use OpenAPI\Client\ApiException;

class LocationApi extends BaseApi implements LocationContract
{

    public function getCities(): Response
    {
        try {
            $response = $this->getApiInstance()->getCities(
                $this->config->getApiPartnerId()
            );
            return Response::make($response);
        } catch (ApiException $e) {
            throw HousematesApiException::because(
                sprintf(
                    'ApiException: %s %s',
                    $e->getCode(),
                    $e->getMessage()
                )
            );
        } catch (Exception $e) {
            throw HousematesApiException::because($e->getMessage());
        }
    }

    public function getUniversities(): Response
    {
        try {
            $response = $this->getApiInstance()->getUniversities(
                $this->config->getApiPartnerId()
            );
            return Response::make($response);
        } catch (ApiException $e) {
            throw HousematesApiException::because(
                sprintf(
                    'ApiException: %s %s',
                    $e->getCode(),
                    $e->getMessage()
                )
            );
        } catch (Exception $e) {
            throw HousematesApiException::because($e->getMessage());
        }
    }

    public function getCity(string $city_slug): Response
    {
        try {
            $response = $this->getApiInstance()->getCity(
                $city_slug,
                $this->config->getApiPartnerId()
            );
            return Response::make($response);
        } catch (ApiException $e) {
            throw HousematesApiException::because(
                sprintf(
                    'ApiException: %s %s',
                    $e->getCode(),
                    $e->getMessage()
                )
            );
        } catch (Exception $e) {
            throw HousematesApiException::because($e->getMessage());
        }
    }

    protected function getApiInstance(): OpenApiLocationsApi
    {
        return new OpenApiLocationsApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }
}
