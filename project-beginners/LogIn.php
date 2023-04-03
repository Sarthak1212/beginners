<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $class = $_POST['class'];

    $sql ="insert into user (name,password,email,class) values('$name','$password','$email','$class')"; 

    $request=mysqli_query($con,$sql);

    if($request)
    {
        echo "You are registered";
    }
    else{
        die(mysqli_error($con));
    }
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
      <nav class="navbar navbar-expand-lg" style="background-color: rgb(145, 221, 240)">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

       <!-- Company name --> 
          
     
    <!--  Nav bar items  -->
      
         <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            
            <a class="navbar-brand" href="index.html"  style="color: rgb(7, 66, 143)"><Strong>Beginners</Strong> </a>   

         <ul class="navbar-nav ms-auto">

            <li class="nav-item">
                <a class="nav-link" href="index.php" > <ion-icon name="home-outline"></ion-icon> Home </a>
                
              </li>



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


    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post" autocomplete="off">
                
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="name" required>
                        <label for="">Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="school-outline"></ion-icon>
                        <input type="number" name="class" required>
                        <label for="">Class</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input autocomplete="false"  type="email" name="email"  required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" autocomplete="false" name="pass" required>
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Confirm Password</label>
                    </div>

                    
                    <button name="submit">Register</button>
                    
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>