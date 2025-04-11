<?php 
require("Connection.php");
session_start();
if(!isset($_SESSION['FacultyLoginId'])){
    header("location: Faculty Login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Faculty Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <script src="https://kit.fontawesome.com/e083b1a7aa.js" ></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"  href="faculty work.css">
    <link rel="stylesheet"  href="facultwork.css">
</head>
<body>
    <div class="header">
    <a href="#" style="margin-left: 18px; margin-bottom: 2px;"><img src="img/eight.jpg" class = "logo" width="70px" height="60px"></a>
    <h1> WELCOME TO FACULTY PANEL </h1> 
    <form method="POST">
    <button name="Logout">Log Out</button>
    <?php
    if(isset($_POST['Logout'])){
        session_destroy();
        header("location: Faculty Login.php");
    }
     ?>
</form>
    </div>
   <section id="container">
   <div class="form-group" id="add">
   <a style="width:200px; height:50px; margin-left:50px;  padding:10px 45px;font-size:22px; text-decoration:none;" class="open-button, btn btn-primary btn-block"  href="Add Result.php">ADD RESULT</a>
   </div>
   <div class="form-group">
   <a style="width:200px; height:50px; margin-left:50px; padding:10px 13px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="search student.php" >SEARCH STUDENT</a>
   </div>
   <div class="form-group" id="edit1">
   <a style="width:200px; height:50px; margin-left:50px; margin-top:20px;  padding:10px 44px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="edit result.php" >EDIT RESULT</a>
   </div>
   </section>
                    
   
</body>
</html>