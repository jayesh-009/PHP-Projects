<?php
    define("hostname", "localhost");
    define("username","root");
    define("password","");
    define("database", "login_system");


    $con=mysqli_connect(hostname, username, password, database);

    if(!$con){
        die("Coonection failed");
    }
    else{
        echo "";
    }
?>