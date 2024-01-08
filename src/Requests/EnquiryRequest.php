<?php

namespace Housemates\ConnectApi\Requests;

use Housemates\ConnectApi\Contracts\Arrayable;

final class EnquiryRequest implements Arrayable
{
    protected string $operatorId;

    protected string $roomId;

    protected string $propertyId;

    protected string $firstName;

    protected string $lastName;

    protected string $email;
    protected ?string $contactNumber;

    protected string $message;
    protected string $metadata;

    /**
     * @return string
     */
    public function getOperatorId(): string
    {
        return $this->operatorId;
    }

    /**
     * @param  string  $operatorId
     * @return EnquiryRequest
     */
    public function setOperatorId(string $operatorId): EnquiryRequest
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomId(): string
    {
        return $this->roomId;
    }

    /**
     * @param  string  $roomId
     * @return EnquiryRequest
     */
    public function setRoomId(string $roomId): EnquiryRequest
    {
        $this->roomId = $roomId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyId(): string
    {
        return $this->propertyId;
    }

    /**
     * @param  string  $propertyId
     * @return EnquiryRequest
     */
    public function setPropertyId(string $propertyId): EnquiryRequest
    {
        $this->propertyId = $propertyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param  string  $firstName
     * @return EnquiryRequest
     */
    public function setFirstName(string $firstName): EnquiryRequest
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param  string  $lastName
     * @return EnquiryRequest
     */
    public function setLastName(string $lastName): EnquiryRequest
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param  string  $email
     * @return EnquiryRequest
     */
    public function setEmail(string $email): EnquiryRequest
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactNumber(): ?string
    {
        return $this->contactNumber ?? null;
    }

    /**
     * @param  string|null  $contactNumber
     * @return EnquiryRequest
     */
    public function setContactNumber(?string $contactNumber): EnquiryRequest
    {
        $this->contactNumber = $contactNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param  string  $message
     * @return EnquiryRequest
     */
    public function setMessage(string $message): EnquiryRequest
    {
        $this->message = $message;
        return $this;
    }

    public function setMetadata(string $metadata): EnquiryRequest
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function metadata(): string
    {
        return $this->metadata;
    }


    public function toArray(): array
    {
        return [
            'operator_id' => $this->operatorId,
            'room_id' => $this->roomId,
            'property_id' => $this->propertyId,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'contact_number' => $this->contactNumber ?? null,
            'message' => $this->message,
        ];
    }
}