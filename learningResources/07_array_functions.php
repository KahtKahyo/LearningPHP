<?php
$fruits = ['apple', 'banana', 'pear'];
//get length
echo count($fruits);

//search array
var_dump(in_array('banana', $fruits));

//add to array
$fruits[] = 'grape';

array_push($fruits, 'blueberry');
array_unshift($fruits, 'orange');
print_r($fruits);

array_pop($fruits); //remove at the end
print_r($fruits);

array_shift($fruits); // deletes at the beginning of the array
print_r($fruits);

unset($fruits[2]); 

// split into 2 chunks

$chunked_Array = array_chunk($fruits, 2);

print_r($chunked_Array); 

$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

print_r($arr3);

$a = ['green', 'red', 'orange', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

// make an object
$c = array_combine($a, $b);
print($c);

//turn it into array
$keys = array_keys($c);
print_r($keys);

// key -> value, value -> key
$flipped = array_flip($c);
print_r($flipped);

$numbers = range(1, 20);
print_r($number);

$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);

print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number) => $number < 10);
print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number) =>
$carry + $number);

var_dump($sum);


?>