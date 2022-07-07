<?php 
$frontend = array(
    'frontend'=>"html",
    'frontend'=>"css",
    'framework'=>"bootstrap");
$backend =array(
    'frontend'=>'laravel',
    'backend'=>'php',
    'framework'=>'simfony');

    echo '<pre>';

$arrayA = ['monitor','mouse','teclado','silla','torre'];
$arrayB = ['torre','memoria','grafica','monitor','mouse'];
var_dump(array_diff($arrayA, $arrayB));
echo '<br>';
var_dump(array_diff($arrayA, $arrayB));
echo '<br>';
var_dump(array_diff($arrayA, $arrayB));
echo '<br>';
// Traer  las llaves repetidas en diferentes Arrays
var_dump(array_merge_recursive($frontend, $backend));
echo '<br>';
// Asigansmo la primera variable como key y la segunda como valor
var_dump(array_combine($arrayA, $arrayB));
echo '<br>';
