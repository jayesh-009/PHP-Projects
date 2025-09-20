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

            echo "User Name is :". $user;

            echo "<br> Password :". $pass;

            session_start();
            $_SESSION['username']=$user;
            $_SESSION['userpass']=$pass;


        ?>

        <br><br>

        <form action="page44.php" method=post>
            <input type="submit" value=Submit>
        </form>

    </center>

    
    
</body>
</html>