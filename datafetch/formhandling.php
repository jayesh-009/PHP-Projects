<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if(isset($_POST['user'])){
        class User{
            function getname($name){
                echo "User name is $name";
            }
        }
        $user=new User();
        $user->getname($_POST['user']);
    }
    
?>

<form action="" method="post">
    <br><br>
    <input type="text" name="user" placeholder="Enter User Name">
    <br><br>

    <button>Click</button>
</form>
    
</body>
</html>