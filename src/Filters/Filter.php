<?php

namespace Housemates\ConnectApi\Filters;

abstract class Filter
{
    protected array $allowedFilters = [];

    protected function checkAgainstAllowedFilters(array $filters): array
    {
        return array_diff_key($filters, array_flip($this->allowedFilters));
    }
}