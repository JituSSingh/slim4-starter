<?php

namespace App;

class Env
{
    public static function get($key, $defaultValue = null)
    {
        return array_key_exists($key, $_ENV) ? $_ENV[$key] : $defaultValue;
    }
}