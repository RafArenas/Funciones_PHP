<?php

/* Creating an array of students. */
$students = ['Juan', 'Michael', 'John', 'Mariana', 'Arnoldo', 'Maritza', 'Mariana'];

/* Searching for the value 'John' in the array . */
// $search = array_search('Juan', $students);
// /* Printing the value of the variable . */
// var_dump($search);
// Checking if the value of  is true. If it is true, it will print the value of
// [].
// if($search >= 0)
//     echo $students[$search];

// echo "<hr>";

// echo end($students);/* Printing the last value of the array. */
// echo "<hr>";
// echo array_pop($students);
// echo "<hr>";
// echo $students[array_key_last($students)];
// echo "<hr>";
// echo $students[count($students)-1];
// echo "<hr>";

// $last = '';
// foreach($students as $st)
//     $last = $st;

// echo $last;


/* Joining the values of the array with a comma. */
// $str = implode(',', $students);//Convert from array to string
// /* Printing the value of the variable . */
// var_dump($str);

/* Creating a string with the names of the students. */
// /* Converting the string into an array. */
// $newArray = explode(',', $str);
// /* Printing the value of the variable . */
// var_dump($newArray);

$str = 'María, Ramírez, Anturí, Mauricio, Rafael, Alejandro, Alejandra, Santiago, Mariana, Eliana, Diana, Stiven, Junior, Luis, Esteban';
/* Creating a variable called `` and assigning the value `Anturí` to it. */
$findtext = 'Rafael';//Searched string
/* Searching for the value of `` in the string ``. */
$position = strpos($str, $findtext);//stripos busca no importa si hay mayusculas o minusculas con strpos busca tal cual está la palabra
/* Printing the value of the variable. */
var_dump($position);
echo "<hr>";
/* Printing the value of the variable ``. */
echo substr($str, $position, strlen($findtext));//strlen -> count characters
echo "<hr>";

