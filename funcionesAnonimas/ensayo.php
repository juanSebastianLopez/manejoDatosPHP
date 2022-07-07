<?php 

function  operadores(Closure $tipo, $value1,$value2){
    return $tipo($value1,$value2);
}
$suma = function($value1,$value2){
    $resultado = $value1 + $value2;
    return "La suma entre el valor $value1 y el valor $value2 es de $resultado";
};
$resta = function($value1,$value2)
{
    $resultado = $value1 - $value2;
    return  "La resta entre el valor $value1 y el valor $value2 es de $resultado";
};
$multiplicacion = function($value1,$value2)
{
    $resultado = $value1 * $value2;
    return "La multiplicacion entre el valor $value1 y el valor $value2 es de $resultado";
};
$division = function($value1,$value2)
{
    $resultado =  filter_var($value1 / $value2,FILTER_SANITIZE_NUMBER_FLOAT);
    return "La division entrel el valor $value1 y el valor $value2 es de $resultado";
};
echo operadores($suma, 5,2);
echo '<br>';
echo operadores($resta, 5,2);
echo '<br>';
echo operadores($multiplicacion,5,8);
echo '<br>';
echo operadores($division,5,8);