<?php

namespace Housemates\ConnectApi\Contracts;

use Housemates\ConnectApi\Filters\EnquiryFilter;
use Housemates\ConnectApi\Requests\EnquiryRequest;
use Housemates\ConnectApi\Response\Response;

interface EnquiryContract
{
    public function create(EnquiryRequest $enquiryRequest): Response;

    public function getEnquiries(?EnquiryFilter $filter): Response;

    public function getEnquiry(string $enquiry_id): Response;

}