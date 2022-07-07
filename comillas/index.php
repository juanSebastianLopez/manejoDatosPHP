<?php 
/*
echo 'Un texto de una linea
con varias lineas
comillas simples \' backslash \ continuar con mas texto
$variable <br>';

$name = 'sebastian';

// Llamando una variable
echo "Mi nombre es $name"; // Con comillas doble
echo 'Mi nombre es'. $name;  // Con comillas simples concatena
*/
$courses = ['backend' => 'PHP'];

// Creacion de una Class
class User{
    public $name = "Sebastian";
}

// Creando un Objeto
$user = new User;

// Para mostrar una variable es con {}
// echo "{$courses['backend'][0]}"; 

// echo "$user->name quiere aprender {$courses['backend'][0]}";

$student = "Sebastian";
$sebastian =  "Estudiante del sena";

/* Accedemos a $student y luego a $sebastian 
 La ultima variable se llama de una forma diferente */
// echo "$student es {$sebastian}";
// echo '<br>';

/* Variable variable con una function*/
function getStudent(){

    return 'student';
}
/* Se crea una variable con el nombre del return */
$student = "Sebastian";
$Sebastian = "PHP";
$PHP = "Full stack";
/* para llamar la funcion con la variable declarada */
echo "${getStudent()} quiere aprender ${${getStudent()}} para ser un ${${${getStudent()}}} ";