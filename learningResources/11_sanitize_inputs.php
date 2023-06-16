<?php

// if is set to post and the value set to submit
if(isset($_POST['submit'])){
    // safe way to get the value through POST
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);
    // OR
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    // OR
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);
    
    echo $name;
    echo $age;
}

// get data through url using GET
echo $_GET['name']; 
echo $_GET['age'];
?>

<!-- GET is kinda dangerous -->
<!-- since GET will show the value at the url -->
<!-- by default form method is GET --> 
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=brad&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age" id="age">
    </div>
    <input type="submit" value="Submit">
</form>

