<?php

namespace Housemates\ConnectApi\Contracts;

use Housemates\ConnectApi\Requests\EnquiryRequest;
use Housemates\ConnectApi\Response\Response;

interface EnquiryContract
{
    public function create(EnquiryRequest $enquiryRequest): Response;

    public function getEnquiries(): Response;

    public function getEnquiry(string $enquiry_id): Response;

}