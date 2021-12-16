<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age== 20){
    echo "1";
}

// Without circle braces
if ($age== 20) echo "1";

// Sample if-else
if ($age>  20){
    echo "1".'<br>';
}else{
    echo "faux".'<br>';
}

// Difference between == and ===
if ($age=== '20'){
    echo "1".'<br>';
}elseif ($age==='20'){
    echo "3".'<br>';
}elseif ($age== '20'){
    echo "3".'<br>';
}else{
    echo "4".'<br>';
}

// if AND
if ($age>=20&&$salary===300000){
    echo"Hey";
}

// if OR
if ($age>20 || $salary===300000){
    echo"Hey2";
}

// Ternary if
echo $age < 22 ? 'young'.'<br>':'old'.'<br>';

// Short ternary
$myage=$age?:18;
echo $myage.'<br>';

// Null coalescing operator
$myName=isset($name)?$name:'John'.'<br>';
$myName=$name??'John1'.'<br>';
echo $myName;

// switch
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}