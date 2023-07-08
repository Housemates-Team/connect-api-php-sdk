<?php

namespace Housemates\ConnectApi\Requests;

use Housemates\ConnectApi\Contracts\Arrayable;

class CheckoutStartRequest implements Arrayable
{
    protected string $bookingPeriodId;
    protected string $operatorId;
    protected string $roomId;

    /**
     * @param  string  $bookingPeriodId
     * @return CheckoutStartRequest
     */
    public function setBookingPeriodId(string $bookingPeriodId): CheckoutStartRequest
    {
        $this->bookingPeriodId = $bookingPeriodId;
        return $this;
    }

    /**
     * @param  string  $operatorId
     * @return CheckoutStartRequest
     */
    public function setOperatorId(string $operatorId): CheckoutStartRequest
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    /**
     * @param  string  $roomId
     * @return CheckoutStartRequest
     */
    public function setRoomId(string $roomId): CheckoutStartRequest
    {
        $this->roomId = $roomId;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'booking_period_id' => $this->bookingPeriodId,
            'operator_id' => $this->operatorId,
            'room_id' => $this->roomId,
        ];
    }
}