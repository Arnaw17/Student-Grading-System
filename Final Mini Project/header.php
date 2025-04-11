<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e083b1a7aa.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="header.css">
    <title>Student Grading System </title>
</head>
<body>
<section id="header">
<a href="#"><img src="img/eight.jpg" class = "logo" width="62px" height="55px"></a>
<h2 style="color:white;">STUDENT GRADING SYSTEM</h2>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">HOME</a></li>
                <li><a href="Admin Login.php">ADMIN LOGIN</a></li>
                <li><a href="Faculty Login.php">FACULTY</a></li>
                <li><a href="Student Login.php">STUDENT DASHBOARD</a></li>
                <a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></a></i>
            </ul>
        </div>  
        <div id="mobile">
        <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        
        </div>
    </section>
    <script src="script.js"></script>
    <script src="app.js"></script>
</body>
</html>