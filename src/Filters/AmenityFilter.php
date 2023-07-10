<?php

namespace Housemates\ConnectApi\Filters;

class AmenityFilter
{
    protected ?string $type = null;

    const PROPERTY_TYPE = 'property';

    const ROOM_TYPE = 'room';

    /**
     * @return null
     */
    public function getFilterType(): ?string
    {
        return $this->type;
    }

    /**
     * @param  null  $type
     */
    public function setFilterType($type): void
    {
        $this->type = $type;
    }

}
