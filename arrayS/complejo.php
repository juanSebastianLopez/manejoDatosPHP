<?php 

$cursos = [
    'frontend' =>'javaScript',
    'frontend' => 'nodejs',
    'backend'=>'php',
    'framework'=>'laravel'
];
$back = $cursos['backend'];
echo '<pre>';
echo $back[1];

    // Recorremos el array $cursos
foreach ($cursos as $curso) {
    echo "<pre>";
    echo "$key: $value"; // Imprime la llave y el valor
    echo $curso; // Imprime el valor
}


function upper($curso,$key)
{
    echo "<br>";
    echo ucfirst($curso)." :". $key;
}
array_walk($cursos,'upper');

echo array_key_exists('framework',$cursos); // Si existe una Llave 
echo in_array('javaScript',$cursos); // Si existe un Valor
print_r(array_keys($cursos)); // Muestra todas las Key del array
echo '<pre>';
print_r(array_values($cursos)); // Muestra todos los Value del array
