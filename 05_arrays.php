<?php

// Create array
$fruit=["banana","apple","orange"];
$fruit2=array(1,2,3);

// Print the whole array
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Get element by index
echo $fruit[1].'<br>';

// Set element by index

$fruit[0]='Peach';

// Check if array has element at index 2
isset($fruit[3]);

// Append element
$fruit[]='banana';

// Print the length of the array
echo count($fruit).'<br>';

// Add element at the end of the array
array_push($fruit,'kiwi');

// Remove element from the end of the array
array_pop($fruit);

// Add element at the beginning of the array
array_unshift($fruit, 'bar');

// Remove element from the beginning of the array
array_shift($fruit);

// Split the string into an array
$string="Ban,app,peac";
explode(",",$string);

// Combine array elements into string
implode("&", $fruit);

// Check if element exist in the array
in_array('apple', $fruit); //true or false

// Search element index in the array
array_search('mango', $fruit);

// Merge two arrays
$veggies=["potato","cucumber"];
echo '<pre>';
var_dump(array_merge($fruit,$veggies));
var_dump([...$fruit,...$veggies]);
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruit);//descendente
rsort($fruit);//ascendente

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['tennis','videogames']
    ];
    echo '<pre>';
    var_dump($person).'<br>';
    print_r($person);
    echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel']='Netflix';

// Null coalescing assignment operator. Since PHP 7.4
/*if (!isset($person['address'])){ 
   $person['address']='unknown';
}*/

$person ['address'] = $person['address']?? 'unknown';

echo '<pre>';
    var_dump($person);
    print_r($person);
    echo '</pre>'; 

// Check if array has specific key
isset($person['local']);//bool return

// Print the keys of the array
array_keys($person);

// Print the values of the array
echo '<pre>';
    var_dump($person);
    print_r($person);
    echo '</pre>'; 

// Sorting associative arrays by values, by keys
ksort($person); //by key 
asort($person);//by value

// Two dimensional arrays
$todos=[
['title'=>'Todo title 1', 'completed'=>true],
['title'=>'Todo title 2', 'completed'=>false]
];