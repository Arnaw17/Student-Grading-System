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
    <link rel="stylesheet"  href="student.css">

</head>
<body>
    <div class="header">
    <a href="#" style="margin-left: 18px; margin-bottom: 2px;"><img src="img/eight.jpg" class = "logo" width="70px" height="60px"></a>
    <h1> WELCOME TO ADMIN PANEL </h1> 
    <div>
            <ul id="navbar">
                <li><a href="Student.php">STUDENT ENTRY</a></li>
               
                <a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></a></i>
            </ul>
        </div>  
    <form method="POST">
    <button name="Logout">Log Out</button>
</form>
</div>
   <section id="container">
    <div id="form">    
    <form action="faculty submit.php" method="POST">
                    <div class="form-group">
                        <label >FACULTY NAME</label>
                        <input type="text" placeholder="ENTER FACULTY NAME" name="Faculty_Name" class="form-control" required>
                    </div> 
                    <div class="form-group">
                        <label >FACULTY UNIQUE NO</label>
                        <input type="number" placeholder="ENTER FACULTY UNIQUE NO"name="Faculty_Uniqueno" class="form-control" required>
                    </div> 
                    <div class="form-group">
                        <label >PHONE NO </label>
                        <input type="number" placeholder="ENTER FACULTY PHONE NO" name="Faculty_Phone" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >FACULTY EMAIL </label>
                        <input type="text" placeholder="ENTER FACULTY EMAIL"name="Faculty_Email" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >DEPARTMENT </label>
                        <input type="text" placeholder="ENTER DEPARTMENT" name="Department" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >FACULTY PASSWORD</label>
                        <input type="text" placeholder="ENTER PASSWORD FOR FACULTY"name="Faculty_Password" class="form-control" required >
                    </div>
                    
                    
                    <button class="btn btn-primary btn-block" name="submit">    SUBMIT </button></a>
                </form>
    </div>
   </section>
    <?php
    if(isset($_POST['Logout'])){
        session_destroy();
        header("location: Admin Login.php");
    }
    
     ?>