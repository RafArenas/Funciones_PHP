<?php

//Se nombran con las mismas reglas que las variables.
//Para declarar una función se usa la palabra reservada --function--
//Dentro de los paréntesis van los parámetros

function sumNumbers(int $x, int $y, int $n, int $z = 0):int {
    //return es una palabra reservada que regresa el valor de la función
    return $x + $y + $n + $z;
}

$sm = sumNumbers(1,2,3);

echo "Total $sm <hr>";

function arraySumNumbers(array $x){
    /* Declaring and initializing the variable with a value of (0). */
    $sm = 0;//Declaro e inicializo la variable con valor de (0)
    /* Iterating through the array `` and assigning each value to the variable ``. */
    foreach($x as $n)//Uso una estructura repetitiva "foreach" para recorrer el arreglo
        $sm += $n;//Sumarle a la variable $sm el valor de $n
        /* Returning the value of the variable . */
        return $sm;
}

/* Calling the function `arraySumNumbers` and passing an array as an argument. */
echo arraySumNumbers([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,27,28]);
echo "<hr>";
/* A built-in function that sums the values of an array. */
echo array_sum([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,27,28]);