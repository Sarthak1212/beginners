<?php

session_start();
if(!isset($_SESSION["user"])){
    header("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="index.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


    <title>DashBoard</title>
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

  <li class="nav-item">
     <a class="nav-link" href="logout.php" > Log Out </a>
     
  </li>
 
</ul>

</div>

</nav>

<!--Nav bar ends here-->



<div class='alert alert-success'> Welcome to DashBoard </div>





    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    
</body>
</html>