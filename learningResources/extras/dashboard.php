<?php 
    // checks the session
    session_start(); 

    if(isset($_SESSION['username'])) {
        echo '<h1> Welcome' . $_SESSION['username'] . '</h1>';
    } else {
        echo 'You are not logged in';
        echo '<a href="/learningResources/13_sessions.php">Back</a>';
    }

?>