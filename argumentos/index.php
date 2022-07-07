<?php 

    // Valores
 function greet($value)
    {
        return "Hola, $value";
    }
echo greet('jSebastian');
echo '<br>';

    // Referencias
    $course = "PHP";
    function path(&$course) // Con un & afectamos la variable de afuera
    {
            $course = 'Laravel';
            echo $course; // Imprime Laravel
    }

path($course); // Imprime tambien Laravel
echo '<br>';

    // Predeterminado
    function predet($name = 'jSebastian')
    {
        return "Hola, $name";   
    }
    echo predet(); // Imprime el parametro predeterminado
    echo '<br>';
    echo predet('Lopez'); // Reemplazamos el parametro predeterminado