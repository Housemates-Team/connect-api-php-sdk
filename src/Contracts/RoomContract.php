<?php

namespace Housemates\ConnectApi\Contracts;

use Housemates\ConnectApi\Filters\RoomFilter;
use Housemates\ConnectApi\Response\Response;
use Housemates\ConnectApi\Sorts\RoomSort;

interface RoomContract
{
    public function getRooms(
        ?RoomFilter $filters,
        ?RoomSort $sort
    ): Response;

    public function getRoom(string $roomId): Response;

    public function getRoomBookingPeriods(string $roomId): Response;
}