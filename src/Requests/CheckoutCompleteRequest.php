<?php

namespace Housemates\ConnectApi\Requests;

use Housemates\ConnectApi\Contracts\Arrayable;

class CheckoutCompleteRequest implements Arrayable
{
    protected string $session_token;

    protected string $room_id;

    protected bool $paying_in_installments;

    protected bool $has_uk_based_guarantor;

    protected bool $is_using_housing_hand;

    protected ?string $special_request;

    protected array $resident_details;

    protected array $course_details;

    protected ?array $supporting_contact_details;

    /**
     * @param  string  $session_token
     * @return CheckoutCompleteRequest
     */
    public function setSessionToken(string $session_token): CheckoutCompleteRequest
    {
        $this->session_token = $session_token;
        return $this;
    }

    /**
     * @param  string  $room_id
     * @return CheckoutCompleteRequest
     */
    public function setRoomId(string $room_id): CheckoutCompleteRequest
    {
        $this->room_id = $room_id;
        return $this;
    }

    /**
     * @param  bool  $paying_in_installments
     * @return CheckoutCompleteRequest
     */
    public function setPayingInInstallments(bool $paying_in_installments): CheckoutCompleteRequest
    {
        $this->paying_in_installments = $paying_in_installments;
        return $this;
    }

    /**
     * @param  bool  $has_uk_based_guarantor
     * @return CheckoutCompleteRequest
     */
    public function setHasUkBasedGuarantor(bool $has_uk_based_guarantor): CheckoutCompleteRequest
    {
        $this->has_uk_based_guarantor = $has_uk_based_guarantor;
        return $this;
    }

    /**
     * @param  bool  $is_using_housing_hand
     * @return CheckoutCompleteRequest
     */
    public function setIsUsingHousingHand(bool $is_using_housing_hand): CheckoutCompleteRequest
    {
        $this->is_using_housing_hand = $is_using_housing_hand;
        return $this;
    }

    /**
     * @param  string|null  $special_request
     * @return CheckoutCompleteRequest
     */
    public function setSpecialRequest(?string $special_request): CheckoutCompleteRequest
    {
        $this->special_request = $special_request;
        return $this;
    }

    /**
     * @param  array  $resident_details
     * @return CheckoutCompleteRequest
     */
    public function setResidentDetails(array $resident_details): CheckoutCompleteRequest
    {
        $this->resident_details = $resident_details;
        return $this;
    }

    /**
     * @param  array  $course_details
     * @return CheckoutCompleteRequest
     */
    public function setCourseDetails(array $course_details): CheckoutCompleteRequest
    {
        $this->course_details = $course_details;
        return $this;
    }

    /**
     * @param  array|null  $supporting_contact_details
     * @return CheckoutCompleteRequest
     */
    public function setSupportingContactDetails(?array $supporting_contact_details): CheckoutCompleteRequest
    {
        $this->supporting_contact_details = $supporting_contact_details;
        return $this;
    }


    public function toArray(): array
    {
        return [
            'room_id' => $this->room_id,
            'session_token' => $this->session_token,
            'paying_in_instalments' => $this->paying_in_installments,
            'has_uk_based_guarantor' => $this->has_uk_based_guarantor,
            'is_using_housing_hand' => $this->is_using_housing_hand,
            'special_request' => $this->special_request ?? null,
            'resident_details' => $this->resident_details,
            'course_details' => $this->course_details,
            'supporting_contact_details' => $this->supporting_contact_details ?? null
        ];
    }
}
