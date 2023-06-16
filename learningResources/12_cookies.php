<?php 
/*  
    Cookies are a mechanism for storing data in the remote
    browser and thus tracking or identifying return users.
    You can set a specific data to be stored in the browser 
    and then retrieve it when the user visits the site again.
 */

    // Set a cookie
    // setcookie(key, value, time to expires)
    // time() gives you the current time stamp
    setcookie('name', 'value', time() + 86400);

    // use cookie
    if(isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    }

    // delete cookie 
    // set cookie to original or minus value, that is f(time()) < time()
    setcookie('name', '', time() - 86400);

 ?>

