<?php

namespace Housemates\ConnectApi\Filters;

class RoomFilter
{
    protected int $per_page_filter = 10;

    protected int $page_filter = 1;

    protected ?string $move_in_date_filter = null;

    protected ?string $geo_fence_filter = null;

    protected ?string $amenities_filter = null;

    protected ?string $price_range_filter = null;

    protected ?string $city_filter = null;


    /**
     * @return int
     */
    public function getPerPageFilter(): int
    {
        return $this->per_page_filter;
    }

    /**
     * @param  int  $per_page_filter
     * @return RoomFilter
     */
    public function setPerPageFilter(int $per_page_filter): RoomFilter
    {
        $this->per_page_filter = $per_page_filter;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMoveInDateFilter(): ?string
    {
        return $this->move_in_date_filter;
    }

    /**
     * @param  string|null  $move_in_date_filter
     * @return RoomFilter
     */
    public function setMoveInDateFilter(?string $move_in_date_filter): RoomFilter
    {
        $this->move_in_date_filter = $move_in_date_filter;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGeoFenceFilter(): ?string
    {
        return $this->geo_fence_filter;
    }

    /**
     * @param  string|null  $geo_fence_filter
     * @return RoomFilter
     */
    public function setGeoFenceFilter(?string $geo_fence_filter): RoomFilter
    {
        $this->geo_fence_filter = $geo_fence_filter;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAmenitiesFilter(): ?string
    {
        return $this->amenities_filter;
    }

    /**
     * @param  string|null  $amenities_filter
     * @return RoomFilter
     */
    public function setAmenitiesFilter(?string $amenities_filter): RoomFilter
    {
        $this->amenities_filter = $amenities_filter;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPriceRangeFilter(): ?string
    {
        return $this->price_range_filter;
    }

    /**
     * @param  string|null  $price_range_filter
     * @return RoomFilter
     */
    public function setPriceRangeFilter(?string $price_range_filter): RoomFilter
    {
        $this->price_range_filter = $price_range_filter;
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
     * @return RoomFilter
     */
    public function setPageFilter(int $page_filter): RoomFilter
    {
        $this->page_filter = $page_filter;
        return $this;
    }

    public function getCityFilter(): ?string
    {
        return $this->city_filter;
    }

    public function setCityFilter(?string $city_filter): RoomFilter
    {
        $this->city_filter = $city_filter;
        return $this;
    }


}