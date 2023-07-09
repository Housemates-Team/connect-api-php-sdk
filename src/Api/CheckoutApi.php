<?php

namespace Housemates\ConnectApi\Api;

use Exception;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use Housemates\ConnectApi\Requests\CheckoutCompleteRequest;
use Housemates\ConnectApi\Requests\CheckoutStartRequest;
use Housemates\ConnectApi\Response\Response;
use OpenAPI\Client\Api\CheckoutApi as OpenApiCheckoutApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\CheckoutCompleteRequestCourseDetails as OpenApiCourseDetails;
use OpenAPI\Client\Model\CheckoutCompleteRequestResidentDetails as OpenApiResidentDetails;
use OpenAPI\Client\Model\CheckoutCompleteRequestSupportingContactDetails as OpenApiSupportingContactDetails;
use OpenAPI\Client\Model\CheckoutStartRequest as OpenApiCheckoutStartRequest;


class CheckoutApi extends BaseApi
{
    public function start(CheckoutStartRequest $checkoutStartRequest): Response
    {
        $open_api_checkout_request = new OpenApiCheckoutStartRequest;
        $checkoutStartRequest = $checkoutStartRequest->toArray();

        $open_api_checkout_request
            ->setBookingPeriodId($checkoutStartRequest['booking_period_id'])
            ->setOperatorId($checkoutStartRequest['operator_id']);

        try {
            $response = $this->getApiInstance()->checkoutStart(
                $this->config->getApiPartnerId(),
                $checkoutStartRequest['room_id'],
                $open_api_checkout_request
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

    public function complete(CheckoutCompleteRequest $checkoutCompleteRequest): Response
    {
        $checkoutCompleteRequest = $checkoutCompleteRequest->toArray();

        $resident_details = json_encode($checkoutCompleteRequest['resident_details']);
        $course_details = json_encode($checkoutCompleteRequest['course_details']);

        if (null !== $checkoutCompleteRequest['supporting_contact_details']) {
            $supporting_contact_details = json_encode($checkoutCompleteRequest['supporting_contact_details']);
        } else {
            $supporting_contact_details = null;
        }

        try {
            $results = $this->getApiInstance()->checkoutComplete(
                $this->config->getApiPartnerId(),
                $checkoutCompleteRequest['room_id'],
                $checkoutCompleteRequest['session_token'],
                $checkoutCompleteRequest['paying_in_instalments'],
                $checkoutCompleteRequest['has_uk_based_guarantor'],
                $checkoutCompleteRequest['is_using_housing_hand'],
                $this->getResidentDetails($checkoutCompleteRequest),
                $this->getCourseDetails($checkoutCompleteRequest),
                $this->getSupportingContactDetails($checkoutCompleteRequest),
                $checkoutCompleteRequest['special_request']
            );
            return new Response($results);

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

    /**
     * @param  array  $checkoutCompleteRequest
     * @return void
     */
    protected function getResidentDetails(array $checkoutCompleteRequest): OpenApiResidentDetails
    {
        $residentDetailsRequest = new OpenApiResidentDetails;
        $residentDetails = array_get($checkoutCompleteRequest, 'resident_details');

        $residentDetailsRequest
            ->setFirstName(array_get($residentDetails, 'first_name'))
            ->setLastName(array_get($residentDetails, 'last_name'))
            ->setGender(array_get($residentDetails, 'gender'))
            ->setNationality(array_get($residentDetails, 'nationality'))
            ->setEmail(array_get($residentDetails, 'email'))
            ->setDateOfBirth(array_get($residentDetails, 'date_of_birth'))
            ->setContactNumber(array_get($residentDetails, 'contact_number'))
            ->setFirstLine(array_get($residentDetails, 'first_line'))
            ->setSecondLine(array_get($residentDetails, 'second_line'))
            ->setCity(array_get($residentDetails, 'city'))
            ->setPostcode(array_get($residentDetails, 'postcode'))
            ->setRegion(array_get($residentDetails, 'region'))
            ->setCountry(array_get($residentDetails, 'country'));

        return $residentDetailsRequest;
    }

    protected function getCourseDetails(array $checkoutCompleteRequest): OpenApiCourseDetails
    {
        $courseDetailsRequest = new OpenApiCourseDetails;
        $courseDetails = array_get($checkoutCompleteRequest, 'course_details');

        $courseDetailsRequest
            ->setCourseTitle(array_get($courseDetails, 'course_title'))
            ->setYearOfStudy(array_get($courseDetails, 'year_of_study'))
            ->setUniversity(array_get($courseDetails, 'university'));

        return $courseDetailsRequest;
    }

    protected function getSupportingContactDetails(array $checkoutCompleteRequest): ?OpenApiSupportingContactDetails
    {
        $supportingContactDetailsRequest = new OpenApiSupportingContactDetails;
        $supportingContactDetails = array_get($checkoutCompleteRequest, 'supporting_contact_details');
        if (null === $supportingContactDetails) {
            return null;
        }

        $supportingContactDetailsRequest
            ->setFirstName(array_get($supportingContactDetails, 'first_name'))
            ->setLastName(array_get($supportingContactDetails, 'last_name'))
            ->setEmail(array_get($supportingContactDetails, 'email'))
            ->setContactNumber(array_get($supportingContactDetails, 'contact_number'))
            ->setDateOfBirth(array_get($supportingContactDetails, 'date_of_birth'))
            ->setRelationship(array_get($supportingContactDetails, 'relationship'))
            ->setFirstLine(array_get($supportingContactDetails, 'first_line'))
            ->setSecondLine(array_get($supportingContactDetails, 'second_line'))
            ->setCity(array_get($supportingContactDetails, 'city'))
            ->setRegion(array_get($supportingContactDetails, 'region'))
            ->setPostcode(array_get($supportingContactDetails, 'postcode'))
            ->setCountry(array_get($supportingContactDetails, 'country'));

        return $supportingContactDetailsRequest;
    }
}
