<?php 

namespace App;

class validate{
    public static function email($value)
    {       // Retorna el valor validado 
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    public static function url($value)
    {        // Retorna la url validada
        return (bool) filter_var($value, FILTER_VALIDATE_URL);
    }
    public static function password($value)
    {       // Una expresion regular para la contraseña
        return (bool) preg_match('/^[0-9a-zA-Z]{6,10}$/',$value);
    
    }
}