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
<style>
    body{
            background-image:none;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <script src="https://kit.fontawesome.com/e083b1a7aa.js" ></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"  href="admin_login.css">
    <link rel="stylesheet"  href="addresult.css">
</head>
<body>
    <div class="col-lg-3, header">
    <a href="#" style="margin-left: 18px; margin-bottom: 2px;"><img src="img/eight.jpg" class = "logo" width="70px" height="60px"></a>
    <h1> ADD RESULT </h1> 
    
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
   <a style="width:200px; height:50px; margin-left:120px; padding:10px 45px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block"  href="Add Result.php">ADD RESULT</></a>
   </div>
   <div class="form-group">
   <a style="width:200px; height:50px; margin-left:120px; padding:10px 13px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="search student.php" >SEARCH STUDENT</a>
   </div>
   <div class="form-group" id="edit1">
   <a style="width:200px; height:50px; margin-left:120px; margin-top:20px;  padding:10px 44px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="edit result.php" >EDIT RESULT</a>
   </div>
   </section>
   <div class="form-popup" id="myForm">
   <form action="facultysubmit.php" method="POST">     
                    <div class="form-group">
                        <label >STUDENT REG NO </label>
                        <input type="number" placeholder="ENTER STUDENT REG NO" name ="Student_Reg" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >STUDENT SEMESTER </label>
                        <input type="number" placeholder="ENTER STUDENT SEMESTER" name ="Student_sem" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >SUBJECT 1 </label>
                        <input type="text" placeholder="ENTER SUBJECT 1" name="Subject_1" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >OBTAINED MARKS</label>
                        <input type="number" placeholder="ENTER SUBJECT 1 MARKS " name="subject1marks" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >SUBJECT 2 </label>
                        <input type="text" placeholder="ENTER SUBJECT 2" name="Subject_2" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >OBTAINED MARKS</label>
                        <input type="number" placeholder="ENTER SUBJECT 2 MARKS "name="subject2marks" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >SUBJECT 3 </label>
                        <input type="text" Placeholder = "ENTER SUBJECT 3" name="Subject_3" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >OBTAINED MARKS</label>
                        <input type="number" placeholder="ENTER SUBJECT 3 MARKS" name="subject3marks" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >SuBJECT 4 </label>
                        <input type="text" placeholder="ENTER SUBJECT 4" name="Subject_4" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >OBTAINED MARKS</label>
                        <input type="number" placeholder="ENTER SUBJECT 4 MARKS" name="subject4marks" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >SUBJECT 5 </label>
                        <input type="text" placeholder = "ENTER SUBJECT 5" name="Subject_5" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >OBTAINED MARKS</label>
                        <input type="number" placeholder="ENTER SUBJECT 5 MARKS" name="subject5marks" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >SUBJECT 6 </label>
                        <input type="text" placeholder="ENTER SUBJECT 6" name="Subject_6" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >OBTAINED MARKS</label>
                        <input type="number" placeholder="ENTER SUBJECT 6 MARKS" name="subject6marks" class="form-control" required >
                    </div>

                    <div class="submit">
                    <button class="btn btn-primary btn-block" name="submit" style="margin-left: -100px;" >  SUBMIT </button>

                    <button style="margin-top:20px;" type="button" class="btn cancel" onclick="closeForm()">Close Form </button>
                    </div>
                </form>
                </div>
    </div>
   </section>
   <script>
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>