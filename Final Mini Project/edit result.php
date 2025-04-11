<?php 
require("Connection.php");
session_start();
if (!isset($_SESSION['FacultyLoginId'])) {
    header("location: Faculty Login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Faculty Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e083b1a7aa.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="admin_login.css">
    <link rel="stylesheet" href="addresult.css">
  
</head>
<body>
    <div class="header">
        <a href="#" style="margin-left: 18px; margin-bottom: 2px;">
            <img src="img/eight.jpg" class="logo" width="70px" height="60px">
        </a>
        <h1>EDIT RESULT</h1> 
        <form method="POST">
            <button name="Logout">Log Out</button>
            <?php
            if (isset($_POST['Logout'])) {
                session_destroy();
                header("location: Faculty Login.php");
                exit;
            }
            ?>
        </form>
    </div>
    <section id="container">
   <div class="form-group" id="add">
   <a style="width:200px; height:50px; margin-left:120px; padding:10px 45px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block"  href="Add Result.php">ADD RESULT</s></a>
   </div>
   <div class="form-group">
   <a style="width:200px; height:50px; margin-left:120px; padding:10px 13px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="search student.php" >SEARCH STUDENT</a>
   </div>
   <div class="form-group" id="edit1">
   <a style="width:200px; height:50px; margin-left:120px; margin-top:20px;  padding:10px 44px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="edit result.php" >EDIT RESULT</a>
   </div>
   </section>
            <div class="form-popup" id="myForm1">
                <div class="form-group" id="edit">
                    <form method="POST" action="editresultstudent.php">
                        <label>REGISTRATION NUMBER</label>
                        <input type="text" placeholder="REGISTRATION NUMBER" name="Student_Reg" id="Student_sem" class="form-control" required>
                        <label>STUDENT SEMESTER</label>
                        <input type="text" placeholder="SEMESTER" name="Student_Semester"  class="form-control" required>
                     
                        <button class="btn btn-primary btn-block" name="submit">Submit</button>
                        <button style="margin-top:20px;" type="button" class="btn cancel" onclick="closeForm1()">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <script>
    function openForm1() {
        document.getElementById("myForm1").style.display = "block";
    }

    function closeForm1() {
        document.getElementById("myForm1").style.display = "none";
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn3')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    </script>
</body>
</html>
