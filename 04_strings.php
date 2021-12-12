<?php

// Create simple string
$name='Zura';
$string='Hello '. $name. '. How are you?';
$string2="Hello $name. How are you?";

// String concatenation
echo 'Hello '. ' World';


// String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>'; //Longitud del string
echo "2 - " . trim($string) . '<br>';//Quita los espacios en blanco al inicio y final
echo "3 - " . ltrim($string) . '<br>';//Quita los espacios a la izquierda
echo "4 - " . rtrim($string) . '<br>';//Quita los espacios a la derecha
echo "5 - " . str_word_count($string) . '<br>';//Cuenta palabras
echo "6 - " . strrev($string) . '<br>';//Escribe el string al reves: dlroW olleH
echo "7 - " . strtoupper($string) . '<br>';//Todo en mayusc
echo "8 - " . strtolower($string) . '<br>';//Todo en minusc
echo "9 - " . ucfirst('hello') . '<br>';//Primera Letra Mayusc
echo "10 - " . lcfirst('HELLO') . '<br>';//Primera Letra Minusc
echo "11 - " . ucwords('hello world') . '<br>';//Primera letra de cada palabra en Mayusc
echo "12 - " . strpos($string, 'world') . '<br>'; //busca el texto y devuelve la posicion, ojo mayusc y minusc
echo "13 - " . stripos($string, 'world') . '<br>'; //busca el texto y devuelve la posicion, sin import mayusc y minusc
echo "14 - " . substr($string, 8, 6) . '<br>';//Sustrae la cantidad de caracteres con el primer numero, el 2do numero es para decir la longitud que se quiere mostrar 
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>';//busca y reemplaza la palabra, ojo mayusc y minusc
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>';//busca y reemplaza la palabra, sin import mayusc y minusc

/*
$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;
*/

// Multiline text and line breaks
$longText = "
  Hello, my name is Zura
  I am 27,
  I love my daughter
";
echo $longText . '<br>';
echo nl2br($longText) . '<br>'; //muestra los salto de linea

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";

$text = "
Hello, my name is &lt;b&gt;Zura&lt;/b&gt;
I am &lt;b&gt;27&lt;/b&gt;,
I love my daughter
";

echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>'; //muestra las etiquetas de html como parte del texto
echo "4 - " . nl2br(htmlentities($longText)) . '<br>';
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>';//en caso de que el texto tenga etiquetas html las convierte del texto a etiquetas
//echo "6 - " . htmlspecialchars($text) . '<br>';

// https://www.php.net/manual/en/ref.strings.php