<?php include('includes/header.php'); ?>
        
<br><br>
        
        <?php
            if(isset($_GET['message'])){
                echo "<h4>".$_GET['message']."</h4>";
            }
        ?>

        <br><br>


<a href="home.php" class="btn btn-primary">Home</a>

  

    <form action="includes/login_process.php" class="form " method="post">
        <div class="form-group">
            <label for="uname">Username</label>
            <input type="text" name="uname" class="form-control">
        </div>
        <br>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <br>

        <div class="form-group">

            <input type="submit" name="login" value="Login" class="btn btn-success">

        </div>
        <br>

         </form>

         <?php include('includes/footer.php'); ?>
  

        