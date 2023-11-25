<?php

class Validator {
    
    public static function string($value, $min=6, $max =10)
    {
        $value = trim($value);
        return strlen($value) >= $min && < $max;
    }
}