<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP </title>
</head>
<body>
    <center>
        <form action='userlogin.php' method=post>

        <table border=2>

        <tr>
            <th>User Name</th>
            <td><input type=text name=txtuser></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type=password name=txtpass></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name=submitbtn>
                <input type="reset" value="Reset">
            </td>
        </tr>


        </table>
        </form>

        <?php 

        if(isset($_POST['submitbtn']))
        {
            $user=$_POST['txtuser'];
            $pass=$_POST['txtpass'];
            // echo $pass;
            // echo $user;

            if(strcmp($user,"jayesh")==0 and strcasecmp($pass,"jayesh")==0)
            
                echo "<font color=green size=5>You are valid user...</font>";

            else

                echo "<font color=blue size=5>You are Invalid user...</font>";
        } 
        ?>

    </center>
    
</body>
</html>