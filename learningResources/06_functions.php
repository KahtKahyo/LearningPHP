<?php
    $y = 12; 
    function registerUser($email){
        global $y;
        //function has scope
        $x = 10;
        echo $email . ' registered';
    }

    registerUser('John');

    function sum($n1, $n2){
        return $n1 + $n2;
    }

    echo sum(5, 5);

    $number = sum(5,5);
    echo $number;

    function sum2($n1 = 4, $n2 = 5){
        return $n1 + $n2;
    }

    echo sum2();

    $subtract = function($n1, $n2){
        return $n1 - $n2;
    };

    echo $subtract(5, 5);

    $multiply = fn($n1, $n2) => $n1 * $n2;
    
    echo $multiply(9, 9);

?> 



