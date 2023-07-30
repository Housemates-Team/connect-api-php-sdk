<?php

namespace Housemates\ConnectApi\Filters;

class EnquiryFilter
{
    protected int $per_page_filter = 10;

    protected int $page_filter = 1;

    protected ?string $status_filter = null;

    /**
     * @return int
     */
    public function getPerPageFilter(): int
    {
        return $this->per_page_filter;
    }

    /**
     * @param  int  $per_page_filter
     * @return EnquiryFilter
     */
    public function setPerPageFilter(int $per_page_filter): EnquiryFilter
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
     * @return EnquiryFilter
     */
    public function setPageFilter(int $page_filter): EnquiryFilter
    {
        $this->page_filter = $page_filter;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatusFilter(): ?string
    {
        return $this->status_filter;
    }

    /**
     * @param  string|null  $status_filter
     * @return EnquiryFilter
     */
    public function setStatusFilter(?string $status_filter): EnquiryFilter
    {
        $this->status_filter = $status_filter;
        return $this;
    }

}