<?php

namespace Housemates\ConnectApi\Response;

use OpenAPI\Client\Model\ModelInterface;

interface Responsible
{
    public function getResponse(): array;
}