<?php 

$cursos = ['php','javascript','laravel','auansebastianlopez'];


// Ordena un array de A-Z
sort($cursos);

// Ordena un array de forma inversa de Z-A
rsort($cursos);

// Ordenas un array por Keys
ksort($cursos);

// Ordena un array de forma inversa por Keys
krsort($cursos);

// Imprime desde el indice que indique
var_dump(array_slice($cursos, 0));

// Divide un array en fragmentos o Arrays 
print_r(array_chunk($cursos,2));

// Elimina el primer valor
echo array_shift($cursos);

// Elimina el ultimo valor
echo array_pop($cursos);

// Agrega al Final los elementos
print_r(array_push($cursos,'Sebastian','Lopez'));

// Agrega al Inico los elementos
print_r(array_push($cursos,'Sebastian','Lopez'));

// Intercambiar la Key x Value
print_r(array_flip($cursos));


