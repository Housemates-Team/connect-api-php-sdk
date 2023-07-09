<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Contracts\EnquiryContract;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Requests\EnquiryRequest;
use Housemates\ConnectApi\Response\Response;
use OpenAPI\Client\Api\EnquiriesApi;
use OpenAPI\Client\ApiException;

class EnquiryApi extends BaseApi implements EnquiryContract
{

    public function create(EnquiryRequest $enquiryRequest): Response
    {
        try {
            $response = $this->getApiInstance()->createEnquiry(
                $this->config->getApiPartnerId(),
                $enquiryRequest->getOperatorId(),
                $enquiryRequest->getPropertyId(),
                $enquiryRequest->getRoomId(),
                $enquiryRequest->getFirstName(),
                $enquiryRequest->getLastName(),
                $enquiryRequest->getEmail(),
                $enquiryRequest->getMessage(),
                $enquiryRequest->getContactNumber()
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

    protected function getApiInstance(): EnquiriesApi
    {
        return new EnquiriesApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }

    public function getEnquiries(): Response
    {
        try {
            $response = $this->getApiInstance()->getEnquiries(
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

    public function getEnquiry(string $enquiry_id): Response
    {
        try {
            $response = $this->getApiInstance()->getEnquiry(
                $this->config->getApiPartnerId(),
                $enquiry_id
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

}
