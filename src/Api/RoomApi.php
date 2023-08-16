<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Contracts\RoomContract;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Filters\RoomFilter;
use Housemates\ConnectApi\Response\Response;
use Housemates\ConnectApi\Sorts\RoomSort;
use OpenAPI\Client\Api\RoomsApi as OpenApiRoomsApi;
use OpenAPI\Client\ApiException;

class RoomApi extends BaseApi implements RoomContract
{
    protected const DEFAULT_PER_PAGE = 10;

    public function getRooms(
        ?RoomFilter $filters,
        ?RoomSort $sort
    ): Response {
        try {
            $apiInstance = $this->getApiInstance();
            $apiPartnerId = $this->config->getApiPartnerId();

            $args = [$apiPartnerId];

            $args[] = optional($filters)->getPerPageFilter() ?? self::DEFAULT_PER_PAGE;
            $args[] = optional($filters)->getPageFilter();
            $args[] = optional($filters)->getCityFilter();
            $args[] = optional($filters)->getMoveInDateFilter();
            $args[] = optional($filters)->getGeoFenceFilter();
            $args[] = optional($filters)->getPriceRangeFilter();
            $args[] = optional($filters)->getAmenitiesFilter();

            $sorts = optional($sort)->getSorts();
            $args[] = $sorts && array_key_exists('price', $sorts) ? $sorts['price'] : null;
            $args[] = $sorts && array_key_exists('max_rooms_left', $sorts) ? $sorts['max_rooms_left'] : null;
            $args[] = $sorts && array_key_exists('is_available', $sorts) ? $sorts['is_available'] : null;


            return Response::make($apiInstance->getRooms(...$args));
        } catch (ApiException $e) {
            throw $this->apiException($e);
        }

    }

    protected function getApiInstance(): OpenApiRoomsApi
    {
        return new OpenApiRoomsApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }

    /**
     * @throws HousematesApiException
     */
    public function getRoom(string $roomId): Response
    {
        try {
            $apiInstance = $this->getApiInstance();
            $apiPartnerId = $this->config->getApiPartnerId();

            return Response::make($apiInstance->getRoom($apiPartnerId, $roomId));
        } catch (ApiException $e) {
           throw $this->apiException($e);
        }
    }

    /**
     * @throws HousematesApiException
     */
    public function getRoomBookingPeriods(string $roomId): Response
    {
        try {
            $apiInstance = $this->getApiInstance();
            $apiPartnerId = $this->config->getApiPartnerId();

            return Response::make($apiInstance->getRoomBookingPeriods($apiPartnerId, $roomId));
        } catch (ApiException $e) {
            throw $this->apiException($e);
        }
    }
}
