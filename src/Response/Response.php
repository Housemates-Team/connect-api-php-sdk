<?php

namespace Housemates\ConnectApi\Response;

use OpenAPI\Client\Model\ModelInterface;

class Response implements Responsible
{
    protected ModelInterface $response;

    public function __construct(ModelInterface $response)
    {
        $this->response = $response;
    }

    public static function make(ModelInterface $response): self
    {
        return new self($response);
    }

    public function getResponse(): array
    {
        return [
            'code' => $this->response->getCode(),
            'message' => $this->response->getMessage(),
            'data' => $this->response->getData(),
            'locale' => $this->response->getLocale(),
        ];
    }

    public function __call($name, $arguments)
    {
        return $this->response->$name(...$arguments);
    }
}