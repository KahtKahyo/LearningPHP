<?php
    $age = 20;
    
    if ($age >= 18){
        echo 'You are old enough to vote';

    }

    $t = date("H");

    if($t < 12){
        echo 'Good morning';
    } elseif($t < 17){
        echo 'Good Afternoon';
    }else {
        echo 'Good evening';
    }

    $posts = ['First Post'];

    if (!empty($posts)){
        echo $posts[0];
    } else {
        echo 'No Posts';
    }

    //ternary
    echo !empty($posts) ? $posts[0] : 'No Posts';
    $firstPost = !empty($posts) ? $posts : 'No Posts';
    $firstPost2 = $posts[0] ?? null;
    echo $firstPost;

    $favoriteColor = 'red';

    switch ($favoriteColor) {
        case 'red':
            echo 'your favorite color is red.';
            break;
        case 'blue':
            echo 'your favorite color is blue.';
            break;
        default:
            echo 'Your favorite color is not red or blue';
    }

    
