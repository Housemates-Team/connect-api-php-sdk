<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Contracts\LocationContract;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Filters\LocationFilter;
use Housemates\ConnectApi\Response\Response;
use OpenAPI\Client\Api\LocationsApi as OpenApiLocationsApi;
use OpenAPI\Client\ApiException;

class LocationApi extends BaseApi implements LocationContract
{

    /**
     * @throws HousematesApiException
     */
    public function getCities(?LocationFilter $locationFilter): Response
    {
        $cityFilter = optional($locationFilter)->getCityFilter();

        try {
            $response = $this->getApiInstance()->getCities(
                $this->config->getApiPartnerId(),
                $cityFilter,
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

    /**
     * @throws HousematesApiException
     */
    public function getUniversities(?LocationFilter $locationFilter): Response
    {
        $universityFilter = optional($locationFilter)->getUniversityFilter();

        try {
            $response = $this->getApiInstance()->getUniversities(
                $this->config->getApiPartnerId(),
                $universityFilter,
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
