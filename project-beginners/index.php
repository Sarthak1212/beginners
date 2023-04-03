<?php

session_start();
if(isset($_SESSION["user"])){
    header("Location: dashboard.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

  <title>Beginners</title>
</head>
<body>

      <!-- Nav Bar starts here-->
      <nav class="navbar navbar-expand-lg " style="background-color: rgb(145, 221, 240)">

        
     

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Company name --> 
      <a class="navbar-brand" href="index.php"  style="color: rgb(7, 66, 143)"><Strong>Beginners</Strong> </a>   


       
    <!--  Nav bar items  -->
      
         <div class="collapse navbar-collapse " id="navbarSupportedContent"> 
            
            
         <ul class="navbar-nav ms-auto">
         <li class="nav-item">
            <a class="nav-link" href="About.html" > About Us </a>
            
          </li>
         <li class="nav-item">
            <a class="nav-link" href="https://unstop.com/" > Blog </a>
            
          </li>
         <li class="nav-item">
            <a class="nav-link" href="Contact.html" > Contact </a>
            
         </li>

        
    </ul>

    </div>
    
    </nav>
    <!--Nav bar ends here-->

    <?php
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['pass'];

            require_once "connect.php";
            $sql = "SELECT * FROM user WHERE email='$email'";
            $result = mysqli_query($con,$sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if($user){
                

                
                if($password == $user["password"]){

                    session_start();
                    $_SESSION["user"] = "yes";

                    header("Location: dashboard.php");
                    die();

                    
                    
                    
                    
                }
                
            }
            else{
             echo "<div class='alert alert-danger'> Email-not-found </div>";
            }

        }
    ?>


    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="index.php" method="post" autocomplete="off">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" autocomplete="false" required>
                        <label for="">Email</label>
                    </div>
                   
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="pass" autocomplete="false" required>
                        <label for="">Password</label>
                    </div>
                
                    <div class="forget">
                       <label for="forget">  <a href="#">Forget Password</a></label>
                      
                    </div>
                    
                    
                    <button name="login">Log in</button>
                    
                    <div class="register">
                        <p>Don't have a account <a href="LogIn.php">Register Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>


