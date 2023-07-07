<?php

namespace Housemates\ConnectApi\Filters;

class PropertyFilter
{
    protected ?string $cityFilter = null;
    protected ?string $slugFilter = null;
    protected ?string $amenitiesFilter = null;
    protected int $perPage = 10;

    public function getCityFilter(): ?string
    {
        return $this->cityFilter;
    }

    public function setCityFilter(?string $cityFilter): PropertyFilter
    {
        $this->cityFilter = $cityFilter;
        return $this;
    }

    public function getSlugFilter(): ?string
    {
        return $this->slugFilter;
    }

    public function setSlugFilter(?string $slugFilter): PropertyFilter
    {
        $this->slugFilter = $slugFilter;
        return $this;
    }

    public function getAmenitiesFilter(): ?string
    {
        return $this->amenitiesFilter;
    }

    public function setAmenitiesFilter(?string $amenitiesFilter): PropertyFilter
    {
        $this->amenitiesFilter = $amenitiesFilter;
        return $this;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }

    public function setPerPage(int $perPage): PropertyFilter
    {
        $this->perPage = $perPage;
        return $this;
    }

}