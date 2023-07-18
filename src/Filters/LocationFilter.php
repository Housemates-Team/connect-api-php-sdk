<?php

namespace Housemates\ConnectApi\Filters;

class LocationFilter
{
    protected ?string $city_filter = null;

    protected ?string $university_filter = null;

    protected ?int $per_page_filter = 10;

    /**
     * @return string|null
     */
    public function getCityFilter(): ?string
    {
        return $this->city_filter;
    }

    /**
     * @param  string|null  $city_filter
     * @return LocationFilter
     */
    public function setCityFilter(?string $city_filter): LocationFilter
    {
        $this->city_filter = $city_filter;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUniversityFilter(): ?string
    {
        return $this->university_filter;
    }

    /**
     * @param  string|null  $university_filter
     * @return LocationFilter
     */
    public function setUniversityFilter(?string $university_filter): LocationFilter
    {
        $this->university_filter = $university_filter;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPerPageFilter(): ?int
    {
        return $this->per_page_filter;
    }

    /**
     * @param  int|null  $per_page_filter
     * @return LocationFilter
     */
    public function setPerPageFilter(?int $per_page_filter): LocationFilter
    {
        $this->per_page_filter = $per_page_filter;
        return $this;
    }

}