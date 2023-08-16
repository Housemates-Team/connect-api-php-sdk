<?php

namespace Housemates\ConnectApi\Api;

use Housemates\ConnectApi\Configuration;
use Housemates\ConnectApi\Exceptions\ApiException as HousematesApiException;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration as OpenApiConfig;

abstract class BaseApi
{
    protected Configuration $config;

    protected OpenApiConfig $openApiConfig;

    public function __construct(
        Configuration $config,
        OpenApiConfig $openApiConfig
    ) {
        $this->config = $config;
        $this->openApiConfig = $openApiConfig;
    }

    public static function make(
        Configuration $config,
        OpenApiConfig $openApiConfig
    ): self {
        return new static($config, $openApiConfig);
    }

    abstract protected function getApiInstance();

    public function apiException(ApiException $e): HousematesApiException
    {
        $exception = new HousematesApiException(
            $e->getMessage(),
            $e->getCode(),
            $e->getResponseHeaders(),
            $e->getResponseBody()
        );
        $exception->setResponseObject($e->getResponseObject());
        return $exception;
    }
}
