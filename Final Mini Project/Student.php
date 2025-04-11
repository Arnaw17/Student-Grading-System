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
    <link rel="stylesheet"  href="header.css">

</head>
<body>
    <div class="header">
    <a href="#"style="margin-left: 18px; margin-bottom: 2px;"><img src="img/eight.jpg" class = "logo" width="70px" height="60px"></a>
    <h1 style="color: #e6e6e6; font-size: 25px;"> WELCOME TO ADMIN PANEL </h1> 
    <div>
            <ul id="navbar">
                <li><a href="Faculty.php">FACULTY ENTRY</a></li>
               
                <a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></a></i>
            </ul>
        </div>  
        <div id="mobile">
        <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        
        </div>
    <form method="POST">
    <button name="Logout">Log Out</button>
    <?php
    if(isset($_POST['Logout'])){
        session_destroy();
        header("location: Admin Login.php");
    }
    
     ?>
</form>
</div>
   <section id="container">
    <div id="form">    
    <form action="student submit.php" method="POST">
                    <div class="form-group">
                        <label >STUDENT NAME</label>
                        <input type="text" placeholder="ENTER NAME" name="Student_Name" class="form-control" required>
                    </div> 
                    <div class="form-group">
                        <label >STUDENT REGISTRATION NO </label>
                        <input type="number" placeholder="ENTER REG" name ="Student_Reg" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >STUDENT SEMESTER </label>
                        <input type="number" placeholder="ENTER SEMESTER" name ="Student_sem" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >STUDENT DEPARTMENT</label>
                        <input type="text" placeholder="ENTER DEPARTMENT" name ="Student_Department" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >FATHER NAME </label>
                        <input type="text" placeholder="ENTER FATHER NAME" name="Father_Name" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >PHONE NO </label>
                        <input type="number" placeholder="ENTER PHONE NO" name="Student_Phone" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >STUDENT EMAIL </label>
                        <input type="text" placeholder=" ENTER STUDENT EMAIL" name="Student_Email" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >STUDENT ADDRESS </label>
                        <input type="text" placeholder=" ENTER STUDENT ADDRESS"name="Student_Address" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >STUDENT STATE </label>
                        <input type="text" placeholder=" ENTER STUDENT STATE" name="Student_State" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >STUDENT CITY </label>
                        <input type="text" placeholder=" ENTER STUDENT CITY" name="Student_City" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >STUDENT PIN CODE </label>
                        <input type="number" placeholder=" ENTER STUDENT PIN CODE"name="Pin_Code" class="form-control" required >
                    </div>
                    <button class="btn btn-primary btn-block" name="submit"> SUBMIT </button></a>
                </form>
    </div>
   </section>
    <?php
    if(isset($_POST['Logout'])){
        session_destroy();
        header("location: Admin Login.php");
    }
    
     ?>
       <script src="script.js"></script>
    <script src="app.js"></script>
</body>
</html>