<?php
    include('dbconn.php');

    session_start();

?>

<?php
    if(isset($_POST['login'])){
        $username=$_POST['uname'];

        $email=$_POST['email']; 
        
   

    }
    $query="select * from `users` where `username`='$username' and `email_id`='$email'";

    $result=mysqli_query($con, $query);

    if(!$result){
        die("Query failed".mysqli_query());

    }
    else{
        $row=mysqli_num_rows($result);

        if($row==1){
            $_SESSION['uname']=$username;

            header('location:../home.php');
        }
        else{
            header('location:../index.php?message=Sorry your username and email is invalid.');
       
        }
       
    }

?>