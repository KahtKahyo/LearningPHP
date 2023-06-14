<?php 
    // checks the session
    session_start(); 

    if(isset($_SESSION['username'])) {
        echo '<h1> Welcome' . $_SESSION['username'] . '</h1>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo 'You are not logged in';
        echo '<a href="/learningResources/13_sessions.php"></a>HomeS';
    }

?>