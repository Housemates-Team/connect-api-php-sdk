<?php

namespace Housemates\ConnectApi\Filters;

class RoomSort
{
    protected array $allowed_sorts = [
        'price',
        'is_available',
        'max_rooms_left'
    ];

    protected array $sorts = [
        'price' => 'price'
    ];


    public function setSortBy(string $field, string $direction = 'desc'): self
    {
        $prefix = ($direction === 'desc') ? '-' : '';
        $this->sorts[$field] = $prefix . $field;
        return $this;
    }

    public function getSorts(): array
    {
        return $this->sorts;
    }


}