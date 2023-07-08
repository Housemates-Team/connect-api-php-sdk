<?php


use Housemates\ConnectApi\Support\Optional;

if (!function_exists('optional')) {
    /**
     * Allow arrow-syntax access of optional objects by using a higher-order
     * proxy object. The eliminates some need of ternary and null coalesce
     * operators in Blade templates.
     *
     * @param  mixed|null  $value
     *
     * @return Optional
     */
    function optional($value)
    {
        return new Optional($value);
    }
}