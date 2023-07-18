<?php

namespace Housemates\ConnectApi\Filters;

class PropertyFilter
{
    protected ?string $city_filter = null;
    protected ?string $slug_filter = null;
    protected ?string $amenities_filter = null;
    protected int $per_page = 10;

    public function getCityFilter(): ?string
    {
        return $this->city_filter;
    }

    public function setCityFilter(?string $cityFilter): PropertyFilter
    {
        $this->city_filter = $cityFilter;
        return $this;
    }

    public function getSlugFilter(): ?string
    {
        return $this->slug_filter;
    }

    public function setSlugFilter(?string $slugFilter): PropertyFilter
    {
        $this->slug_filter = $slugFilter;
        return $this;
    }

    public function getAmenitiesFilter(): ?string
    {
        return $this->amenities_filter;
    }

    public function setAmenitiesFilter(?string $amenitiesFilter): PropertyFilter
    {
        $this->amenities_filter = $amenitiesFilter;
        return $this;
    }

    public function getPerPage(): int
    {
        return $this->per_page;
    }

    public function setPerPage(int $perPage): PropertyFilter
    {
        $this->per_page = $perPage;
        return $this;
    }

}