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
            $user=$_POST['txtuser'];
            $pass=$_POST['txtpass'];

            $ckname='username';
            $cknamevalue=$user;

            $ckpass='password';
            $ckpassvalue=$pass;

            setcookie($ckname, $cknamevalue);

            setcookie($ckpass, $ckpassvalue);

            echo "User Name is :". $user;

            echo "<br> Password :". $pass;

        ?>

        <br><br>

        <form action="page2.php" method=post>
            <input type="submit" value=Submit>
        </form>

    </center>

    
    
</body>
</html>