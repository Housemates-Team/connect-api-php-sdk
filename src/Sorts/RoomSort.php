<?php

namespace Housemates\ConnectApi\Sorts;

use Housemates\ConnectApi\Exceptions\SortException;

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


    /**
     * @throws SortException
     */
    public function setSortBy(string $field, string $direction = 'desc'): self
    {
        if (!in_array($field, $this->allowed_sorts)) {
            throw SortException::because("{$field} is not a valid sort field");
        }

        $prefix = ($direction === 'desc') ? '-' : '';
        $this->sorts[$field] = $prefix.$field;

        return $this;
    }

    public function getSorts(): array
    {
        return $this->sorts;
    }

}