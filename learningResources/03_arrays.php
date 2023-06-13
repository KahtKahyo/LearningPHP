<?php 

    $numbers = [1,44,56,73];
    $fruits = array('apple', 'orange', 'pear');

    var_dump($numbers);
    var_dump($fruits);

    echo $fruits;
    echo $fruits[1];

    $colors = [
        1 => 'red',
        2 => 'yellow',
        3 => 'green',
    ];

    echo $colors[1];

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f',
    ];

    echo $hex['red'];
    
    $person = [
        'first_name' => 'John',
        'last_name' => 'Doe',
    ];

    echo $person['first_name'];

    $people = [[
        'first_name' => 'John',
        'last_name' => 'Doe',
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Kennedy',
    ],
    ];

    echo $people[1]['first_name'];

    var_dump(json_encode($people));

    // theres also json_decode() function
