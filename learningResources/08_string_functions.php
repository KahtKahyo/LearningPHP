<?php

$string = 'Hello World';

//Get the length of a string
echo strlen($string);

//Find the position of the first occurence of a substring in a string
echo strpos($string, 'o');

//Find the position of the last occurence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo strrev($string);

//convert all characters to lowercase
echo strtolower($string);

//convert all characters to uppercase
echo strtoupper($string);

//Uppercase first character of a string
echo ucwords($string);

//string_replace
echo str_replace('World', 'Everyone', $string);

//Return portion of a string specified by the offset ang length

echo substr($string, 0, 5);
echo substr($string, 5);

//starts with 
if (str_starts_with($string, 'Hello')){
    echo 'Yes'; 
}

// Ends with
if (str_ends_with($string, 'World')){
    echo 'Yes'; 
}

$string2 = '<script>alert("Hello World")</script>';
echo $string2;

$string3 = '<script>alert("Hello World")</script>';
echo htmlspecialchars($string3);

printf('%s likes to $s', 'Brad', 'code'); 
printf('1+1=%d', 1+1);
printf('1+1=%f', 1+1);


