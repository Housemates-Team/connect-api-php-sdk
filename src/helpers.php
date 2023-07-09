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

if (!function_exists('array_get')) {
    /**
     * Get an item from an array or object using "dot" notation.
     *
     * @param  mixed  $array
     * @param  string|int  $key
     * @param  mixed|null  $default
     *
     * @return mixed
     */
    function array_get($array, $key, $default = null)
    {
        $keys = explode('.', $key);

        foreach ($keys as $key) {
            if (is_array($array) && array_key_exists($key, $array)) {
                $array = $array[$key];
            } else {
                return $default;
            }
        }

        return $array;
    }
}