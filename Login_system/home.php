<?php include('includes/header.php'); ?>
 
<?php session_start(); ?>
<br>

  <?php


        if(isset($_SESSION['uname'])){
            echo "<h2>Welcome ".$_SESSION['uname'] .".....</h2>";
            echo "<br><br>";
            echo "<h5>You have successfully login to the homepage...</h5>";
        }
        else{
            header('location:index.php?message=You need to login to enter the homepage...');

            
        }
      
    ?> 
    <br><br><br>
    
    <a href="includes/logout_process.php" class="btn btn-danger">Logout</a>

<?php include('includes/footer.php'); ?>
  

        