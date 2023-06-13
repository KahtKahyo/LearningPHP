<?php

echo $_GET['name']; 
echo $_GET['age'];
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=brad&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
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