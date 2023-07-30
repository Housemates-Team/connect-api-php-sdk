<?php

namespace Housemates\ConnectApi\Filters;

class PropertyFilter
{
    protected ?string $city_filter = null;
    protected ?string $slug_filter = null;
    protected ?string $amenities_filter = null;
    protected int $per_page_filter = 10;
    protected int $page_filter = 1;


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

    /**
     * @return int
     */
    public function getPerPageFilter(): int
    {
        return $this->per_page_filter;
    }

    /**
     * @param  int  $per_page_filter
     * @return PropertyFilter
     */
    public function setPerPageFilter(int $per_page_filter): PropertyFilter
    {
        $this->per_page_filter = $per_page_filter;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageFilter(): int
    {
        return $this->page_filter;
    }

    /**
     * @param  int  $page_filter
     * @return PropertyFilter
     */
    public function setPageFilter(int $page_filter): PropertyFilter
    {
        $this->page_filter = $page_filter;
        return $this;
    }
    
}