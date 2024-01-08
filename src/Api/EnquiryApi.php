<?php

namespace Housemates\ConnectApi\Api;

use Housemates\ConnectApi\Contracts\EnquiryContract;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Filters\EnquiryFilter;
use Housemates\ConnectApi\Requests\EnquiryRequest;
use Housemates\ConnectApi\Response\Response;
use OpenAPI\Client\Api\EnquiriesApi as OpenApiEnquiriesApi;
use OpenAPI\Client\ApiException;

class EnquiryApi extends BaseApi implements EnquiryContract
{

    /**
     * @throws HousematesApiException
     */
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
            throw $this->apiException($e);
        }
    }

    public function createGeneral(EnquiryRequest $enquiryRequest): Response
    {
        try {
            $response = $this->getApiInstance()->createGeneralEnquiry(
                $this->config->getApiPartnerId(),
                $enquiryRequest->getFirstName(),
                $enquiryRequest->getLastName(),
                $enquiryRequest->getEmail(),
                $enquiryRequest->getMessage(),
                $enquiryRequest->getContactNumber(),
                $enquiryRequest->metadata()
            );
            return Response::make($response);
        } catch (ApiException $e) {
            throw $this->apiException($e);
        }
    }

    protected function getApiInstance(): OpenApiEnquiriesApi
    {
        return new OpenApiEnquiriesApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }

    /**
     * @throws HousematesApiException
     */
    public function getEnquiries(?EnquiryFilter $filter): Response
    {
        $apiInstance = $this->getApiInstance();
        $apiPartnerId = $this->config->getApiPartnerId();

        try {
            if (null === $filter) {
                $response = $apiInstance->getEnquiries($apiPartnerId);
                return Response::make($response);
            }
            $per_page_filter = optional($filter)->getPerPageFilter();
            $page_filter = optional($filter)->getPageFilter();
            $status_filter = optional($filter)->getStatusFilter();

            $response = $apiInstance->getEnquiries(
                $apiPartnerId,
                $per_page_filter,
                $page_filter,
                $status_filter
            );
            return Response::make($response);
        } catch (ApiException $e) {
            throw $this->apiException($e);
        }
    }

    /**
     * @throws HousematesApiException
     */
    public function getEnquiry(string $enquiry_id): Response
    {
        try {
            $response = $this->getApiInstance()->getEnquiry(
                $this->config->getApiPartnerId(),
                $enquiry_id
            );
            return Response::make($response);
        } catch (ApiException $e) {
            throw $this->apiException($e);
        }
    }

}
