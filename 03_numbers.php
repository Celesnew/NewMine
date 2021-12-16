<?php

// Declaring numbers
$a=5;
$b=4;
$c=1.2;

// Arithmetic operations
echo ($a+$b)*$c . '<br>';
echo $a-$b . '<br>';
echo $a*$b . '<br>';
echo $a/$b . '<br>';
echo $a%$b . '<br>';
// Assignment with math operators
/*
$a+=$b;echo $a . '<br>';
$a-=$b;echo $a . '<br>';
$a*=$b;echo $a . '<br>';
$a/=$b;echo $a . '<br>';
$a%=$b;echo $a . '<br>';

*/
// Increment operator
echo $a++ . '<br'; //increments after echo
echo ++$a . '<br>'; //increments before echo

// Decrement operator
echo $a-- . '<br'; //decrements after echo
echo --$a . '<br>'; //decrements before echo

// Number checking functions
is_float(1.25);
is_double(1.25);
is_int(5);
is_numeric("3.45");
is_numeric("3r.45");

// Conversion
$strNumber='12.34';
$numberfloat=(float)$strNumber;
$numberfloat2=floatval($strNumber);
$numbint=(int)$strNumber;
$numbint2=intval($strNumber);
var_dump($numberfloat);

// Number functions
echo "abs(-15)" . abs(-15) . '<br>'; //valor absoluto
echo "pow(2,3)" .  pow(2,3) . '<br>'; //potencia 2 a la 3
echo "sqrt(16)" .  sqrt(16) . '<br>'; //raiz cuadrada
echo "max(2,9,3)" .  max(2,9,3) . '<br>'; //maximo de los valores
echo "min(2,3)" .  min(2,3) . '<br>'; //minimo de los valores
echo "round(2.4)" .  round(2.4) . '<br>'; // redondear
echo "round(2.6)" .  round(2.6) . '<br>'; // redondear
echo "floor(2.6)" .  floor(2.6) . '<br>'; //redondear por defecto
echo "ceil(2.6)" .  ceil(2.6) . '<br>'; //redondear por exceso
 
// Formatting numbers
$number=123456789.12345;
echo number_format($number,2,'.',',');

// https://www.php.net/manual/en/ref.math.php