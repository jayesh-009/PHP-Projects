<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>
    <?php
        session_start();

        $uname=$_COOKIE['username'];
        $upass=$_COOKIE['userpass'];

        echo "Username in Second Page :". $uname;
        echo "<br>Password in Second Page :". $upass;
        session_unset();
        session_destroy();

    ?>
</center>


    
</body>
</html>