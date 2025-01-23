<?php

class Validator
{
    public static function validateString($value, $min, $max)
    {
        $value = trim($value);

        return $value && strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function validateEmail($value)
    {
        return $value && filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
