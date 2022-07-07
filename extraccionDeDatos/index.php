<?php
// Extraer el indice de un String
$data = "Estudio PHP";
// Con llave {} o corchetes []
echo $data[0];
echo '<br>';
echo $data{0};
echo '<br>';

// Substraemos unas cantidad de texto 
$post = "Sebastian esta aprendiendo PHP porque quiere ser Full Stack";
$extrat = substr($post,0,30); // Desde la posicion 0 Hasta el indice 30
$extrat = substr($post,-33); // En caso de que sea negativo empezara desde la derecha
echo "$extrat... [vér más]";


// Convierte una cadena de String en un Array
$dato = "javascript, php, html, laravel"; // Campos tags 
$tags = explode(', ',$dato);    // Convierte en array separado por ,
echo "<pre>";
var_dump($tags);
echo "<br>";



// Convierte un Array en una cadena de String
$courses = ["javascrip","php","laravel"];
echo "<br>";
echo "<br>";
echo  implode(', ',$courses);
echo "<br>";
echo "<br>";
echo $courses[2];

// Formatea el string y elimina espacios demas 
$courses = "          Curso de PHP    ";
$course = trim($courses); // Funcion que eliminar los espacios
$course = ltrim($courses); // Funcion que elimina solo los espacios de la izquierda
$course = rtrim($courses); // Funcion que elimina solo los espacios de la derecha

echo "<pre>";
echo "Quiero aprender $course y otro texto";