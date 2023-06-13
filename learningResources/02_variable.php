<?php

$nama = 'John';
$age = 40; 
$has_kids = false;
$cash_on_hand = 20.75; 

echo $has_kids;
var_dump($has_kids);

echo $name . ' is ' . $age . ' years old';

echo "${name} is ${age} years old";

echo '5' + '5'; // u can output any operations using this 

$x = '5' + '5';
var_dump($x);

//constant
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo HOST;
