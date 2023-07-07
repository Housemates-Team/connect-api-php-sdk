<?php

namespace Housemates\ConnectApi\Api;

use OpenAPI\Client\Api\RoomsApi;

class RoomApi extends BaseApi
{

    protected function getApiInstance(): RoomsApi
    {
        return new RoomsApi(
            $this->config->getClient(), $this->openApiConfig
        );
    }
}