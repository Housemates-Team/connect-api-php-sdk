<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Requests\CheckoutStartRequest;
use OpenAPI\Client\Api\CheckoutApi as OpenApiCheckoutApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\CheckoutStartRequest as OpenApiCheckoutStartRequest;


class CheckoutApi extends BaseApi
{
    public function start(CheckoutStartRequest $checkoutStartRequest)
    {
        $open_api_checkout_request = new OpenApiCheckoutStartRequest();
        $checkoutStartRequest = $checkoutStartRequest->toArray();

        $open_api_checkout_request
            ->setBookingPeriodId($checkoutStartRequest['booking_period_id'])
            ->setOperatorId($checkoutStartRequest['operator_id']);

        try {
            return $this->getApiInstance()->checkoutStart(
                $this->config->getApiPartnerId(),
                $checkoutStartRequest['room_id'],
                $open_api_checkout_request
            );
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

    protected function getApiInstance(): OpenApiCheckoutApi
    {
        return new OpenApiCheckoutApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }
}
