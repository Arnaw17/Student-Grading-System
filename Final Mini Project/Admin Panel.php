<?php 
require("Connection.php");
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location: Admin Login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <script src="https://kit.fontawesome.com/e083b1a7aa.js" ></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"  href="admin_login.css">
  
    
</head>
<body>
    <div class="header">
    <a href="#" style="margin-left: 18px; margin-bottom: 2px;"><img src="img/eight.jpg" class = "logo" width="70px" height="60px"></a>
    <h1> WELCOME TO ADMIN PANEL </h1> 
   
<div>
    <ul id="navbar">
    <a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></i></a>
        <li><a href="index.php">Home</a></li>
       
        <li><a href="Faculty Login.php">Faculty</a></li>
        <li><a href="Student Login.php">Student Dashboard</a></li>
    </ul>
</div>

<div id="mobile">
    <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
</div>

    </section>
    <form method="POST">
    <button name="Logout">Log Out</button>  
</form>
    </div>
   <section id="container">
    <div id="form">
    <form>
            
    </form>
    
    </div>
   </section>
    <?php
    if(isset($_POST['Logout'])){
        session_destroy();
        header("location: Admin Login.php");
    }
     ?>
    <section class="hilo">
        <div id="hero">
            <h2><a href="Student.php">
                Student Data Entry
            </h2></a>
        </div>
    </section>
    <section class="hilo">
        <div id="hero1">
            <h2><a href="Faculty.php">
                Faculty Data Entry
            </h2></a>
        </div>
        
    </section>
    
        <script src="script.js"></script>
    <script src="app.js"></script>
</body>
</html>