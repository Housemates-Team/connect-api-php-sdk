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
     * @throws ApiException
     */
    public function getCities(?LocationFilter $locationFilter): Response
    {
        $cityFilter = optional($locationFilter)->getCityFilter();
        $pageFilter = optional($locationFilter)->getPageFilter();

         try {
            $response = $this->getApiInstance()->getCities(
                $this->config->getApiPartnerId(),
                $pageFilter,
                $cityFilter,
            );
            return Response::make($response);
         } catch (ApiException $e) {
            throw $this->apiException($e);
         }
    }

    /**
     * @throws HousematesApiException
     * @throws ApiException
     */
    public function getUniversities(?LocationFilter $locationFilter): Response
    {
        $universityFilter = optional($locationFilter)->getUniversityFilter();
        $pageFilter = optional($locationFilter)->getPageFilter();

         try {
            $response = $this->getApiInstance()->getUniversities(
                $this->config->getApiPartnerId(),
                $pageFilter,
                $universityFilter,
            );
            return Response::make($response);
         } catch (ApiException $e) {
             throw $this->apiException($e);
         }
    }

    protected function getApiInstance(): OpenApiLocationsApi
    {
        return new OpenApiLocationsApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }
}
