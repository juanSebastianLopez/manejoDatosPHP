<?php

    // Valores
    function greet()
    {
        return ['Sebastian','Lopez'];
    }
// echo '<pre>';
// print_r(greet());
echo greet()[0];
echo '<br>';

exit(); // Detiene el sistema
return; // Solo devuelve un resultado