<?php 
/*
 Expreciones Regulares

 /: Contenedor
 ^: Inicio
 $: Final
 -: Rango
 []: Patron
 {}: Condicion
 */

 // Returna solo True=1 o False=0
 $password = '123456789';
 echo preg_match('/^[0-9]{6,9}$/',$password); // [Solo # del 0-9] y {Min6 Max9}