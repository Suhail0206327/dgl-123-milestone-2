<?php

class Validator {
    
    public static function password($value, $min=6, $max =10)
    {
        $value = trim($value);
        return strlen($value)>= $min &&  strlen($value) < $max;
    }
    public static function email($value) {
      
        return filter_var($value, FILTER_VALIDATE_EMAIL );
        
    }
}

