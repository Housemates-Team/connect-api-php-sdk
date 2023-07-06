<?php

namespace Housemates\ConnectApi\Filters;

use Housemates\ConnectApi\Exceptions\FilterException;

class PropertyFilter extends Filter
{
    protected ?string $cityFilter = null;
    protected ?string $slugFilter = null;
    protected ?string $amenitiesFilter = null;
    protected int $perPage = 10;

    protected array $allowedFilters = [
        'city',
        'slug',
        'amenities',
    ];
    protected array $filters = [];

    /**
     * @return string|null
     */
    public function getCityFilter(): ?string
    {
        return $this->cityFilter;
    }

    /**
     * @param  string|null  $cityFilter
     * @return PropertyFilter
     */
    public function setCityFilter(?string $cityFilter): PropertyFilter
    {
        $this->cityFilter = $cityFilter;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSlugFilter(): ?string
    {
        return $this->slugFilter;
    }

    /**
     * @param  string|null  $slugFilter
     * @return PropertyFilter
     */
    public function setSlugFilter(?string $slugFilter): PropertyFilter
    {
        $this->slugFilter = $slugFilter;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAmenitiesFilter(): ?string
    {
        return $this->amenitiesFilter;
    }

    /**
     * @param  string|null  $amenitiesFilter
     * @return PropertyFilter
     */
    public function setAmenitiesFilter(?string $amenitiesFilter): PropertyFilter
    {
        $this->amenitiesFilter = $amenitiesFilter;
        return $this;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @param  int  $perPage
     * @return PropertyFilter
     */
    public function setPerPage(int $perPage): PropertyFilter
    {
        $this->perPage = $perPage;
        return $this;
    }

}