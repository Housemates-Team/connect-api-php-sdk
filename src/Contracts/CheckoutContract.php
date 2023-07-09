<?php

namespace Housemates\ConnectApi\Contracts;

use Housemates\ConnectApi\Requests\CheckoutCompleteRequest;
use Housemates\ConnectApi\Requests\CheckoutStartRequest;
use Housemates\ConnectApi\Response\Response;

interface CheckoutContract
{
    public function start(CheckoutStartRequest $checkoutStartRequest): Response;

    public function complete(CheckoutCompleteRequest $checkoutCompleteRequest): Response;
}