<?php

namespace App\Helpers;

class GenericHelper 
{
    /**
     * Generate id number.
     * 
     * @param string $prefix
     * 
     * @return string
     */
    public static function idGenerator(string $prefix)
    {
        return $prefix . mt_rand(10000,99999) . mt_rand(100,999);
    }
}