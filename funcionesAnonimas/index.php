<?php 
/*
$saludar = function ($name) // Solo variables que requieran logica
{
    return "Hola, $name";
};

echo $saludar('Sebastian');
*/


        // Closure = Esperamos una function anonima
function saludo(Closure $lang, $name)
{
        return $lang($name);
}

    // Creamos una variable para cada idioma
    // Function sin nombre
$es = function($name)
{
    return "Hola $name, <br> ¿Como vaS?"; // Creamos la logica
};
    // Creamos una variable para cada idioma
    // Function sin nombre
$en = function($name)
{
    return "Hello $name, <br> ¿How are you?"; // Creamos la logica
};
    // Creamos una variable para cada idioma
    // Function sin nombre
$ale = function($name)
{
    return "Hallo $name, <br> ¿wie geht's dir?"; // Creamos la logica
};

    // Mandamos a imprimir el texto con el nombre de la
    // Function(Lenguaje, y Parametro)
echo saludo($es, 'Sebastian');