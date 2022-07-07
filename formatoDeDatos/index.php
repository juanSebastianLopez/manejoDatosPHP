<?php 

// Alterar a minusculas
$text = "PHP es un lenaguaje";
$texto = "PHP es un lenaguaje, año 2022, programacion";
echo strtolower($text); // Convierte el texto en Miniscula
echo "<br>";
echo strtoupper($text); // Convierte el texto en Mayuscula
echo ucfirst($text); // Pasa a Mayuscula el primer caracter de un string
echo lcfirst($text); // Pasa a Minúscula el primer caracter de un string


// Reemplazar 
$slug = str_replace(' ','-',$text);
$slug = str_replace('PHP','JavaScript',$text);
echo ucfirst($slug);
echo '<br>';


// Modificacion 
$code = 39;
echo str_pad($code,10,'#',STR_PAD_BOTH); // Central el valor 
echo str_pad($code,10,'#',STR_PAD_LEFT); // Pone a la Derecha el valor 
echo str_pad($code,10,'#',STR_PAD_RIGHT); // Pone a la Izquierda el valor 

echo strip_tags($text); // Eliminamos los Tags HTML o PHP

echo strtoupper($texto); // Monobyte
echo mb_strtoupper($texto); // Multibyte acoge la ñ y tildes