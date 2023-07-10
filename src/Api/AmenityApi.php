<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Contracts\AmenityContract;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Filters\AmenityFilter;
use Housemates\ConnectApi\Response\Response;
use OpenAPI\Client\Api\AmenitiesApi as OpenApiAmenitiesApi;
use OpenAPI\Client\ApiException;

class AmenityApi extends BaseApi implements AmenityContract
{
    /**
     * @throws HousematesApiException
     */
    public function get(AmenityFilter $amenityFilter = null): Response
    {
        $amenityFilterType = $amenityFilter ? $amenityFilter->getFilterType() : AmenityFilter::PROPERTY_TYPE;
        try {
            $response = $this->getApiInstance()->getAmenities(
                $this->config->getApiPartnerId(),
                $amenityFilterType
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

    protected function getApiInstance(): OpenApiAmenitiesApi
    {
        return new OpenApiAmenitiesApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }


}
