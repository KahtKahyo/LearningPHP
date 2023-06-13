<?php 

for($x = 0; $x <= 10; $x++){
    echo 'Number ' . $x . '<br>'; 
}

echo 'this is while loop';

$x = 1;

while($x < 10){
    echo 'number' .$x . '<br>';
    $x = $x + 1;
}

echo '<br>'.'this is do while loop';

$i = 1;

do {
    echo 'number' .$i . '<br>';
    $i++;
} while ($i < 10);

$posts = ['First Post', 'Second Post', 'Third Post'];

for($x = 0; $x < count($posts); $x++) {
    echo $posts[$x];
}

echo ' this is foreach loop';

foreach($posts as $index => $post){
    echo $index . ' - ' . $post . '<br>';
}

$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
];

foreach($person as $key => $value){
    echo $key . ' - ' . $value . '<br>';
}

?>