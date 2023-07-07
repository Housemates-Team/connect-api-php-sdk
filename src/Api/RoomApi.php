<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Filters\RoomFilter;
use Housemates\ConnectApi\Sorts\RoomSort;
use OpenAPI\Client\Api\RoomsApi;
use OpenAPI\Client\ApiException;

class RoomApi extends BaseApi
{
    protected const DEFAULT_PER_PAGE = 10;

    public function getRooms(
        ?RoomFilter $filters,
        ?RoomSort $sort
    ) {
        try {
            $apiInstance = $this->getApiInstance();
            $apiPartnerId = $this->config->getApiPartnerId();

            $args = [$apiPartnerId];

            $args[] = optional($filters)->getPerPageFilter() ?? self::DEFAULT_PER_PAGE;
            $args[] = optional($filters)->getMoveInDateFilter();
            $args[] = optional($filters)->getGeoFenceFilter();
            $args[] = optional($filters)->getPriceRangeFilter();
            $args[] = optional($filters)->getAmenitiesFilter();

            $sorts = optional($sort)->getSorts();
            $args[] = $sorts && array_key_exists('price', $sorts) ? $sorts['price'] : null;
            $args[] = $sorts && array_key_exists('max_rooms_left', $sorts) ? $sorts['max_rooms_left'] : null;
            $args[] = $sorts && array_key_exists('is_available', $sorts) ? $sorts['is_available'] : null;


            return $apiInstance->getRooms(...$args);
        } catch (ApiException $e) {
            throw HousematesApiException::because(
                sprintf('ApiException: %s %s', $e->getCode(), $e->getMessage())
            );
        } catch (Exception $e) {
            throw HousematesApiException::because($e->getMessage());
        }

    }

    protected function getApiInstance(): RoomsApi
    {
        return new RoomsApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }

    public function getRoom(string $roomId)
    {
        try {
            $apiInstance = $this->getApiInstance();
            $apiPartnerId = $this->config->getApiPartnerId();

            return $apiInstance->getRoom($apiPartnerId, $roomId);
        } catch (ApiException $e) {
            throw HousematesApiException::because(
                sprintf('ApiException: %s %s', $e->getCode(), $e->getMessage())
            );
        } catch (Exception $e) {
            throw HousematesApiException::because($e->getMessage());
        }
    }

    public function getRoomBookingPeriods(string $roomId)
    {
        try {
            $apiInstance = $this->getApiInstance();
            $apiPartnerId = $this->config->getApiPartnerId();

            return $apiInstance->getRoomBookingPeriods($apiPartnerId, $roomId);
        } catch (ApiException $e) {
            throw HousematesApiException::because(
                sprintf('ApiException: %s %s', $e->getCode(), $e->getMessage())
            );
        } catch (Exception $e) {
            throw HousematesApiException::because($e->getMessage());
        }
    }
}