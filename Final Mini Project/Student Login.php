<?php 
    require("Connection.php");
   
?>
<?php 
include( "header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e083b1a7aa.js" ></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <link rel="stylesheet"  href="studentlogin.css">
    
    <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
  
}
</style>
    
</head>

<body>
    
    <div class="login-form">
        <h2 style="background-color: #3DDBC6;">Student Login Panel</h2>
        <form method="POST">
            <div class="input-field">
            <span class="material-symbols-outlined">
                person
            </span>
                <input type="text" placeholder="STUDENT REGISTRATION NO" name="studentreg">
            </div>
            <div class="input-field">
            <span class="material-symbols-outlined">
                lock
            </span>
                <input type="password" placeholder="STUDENT SEM" name="sem">
            </div>
            <button type="submit" name="Signin"> Sign In </button>
        </form>
    </div>
    <?php
    if(isset($_POST['Signin']))
    {
        $query= "SELECT * FROM `student_details` WHERE `Student_Reg`='$_POST[studentreg]' AND `Semester`='$_POST[sem]'";
       $result = mysqli_query($con, $query);
       if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['StudentLoginId']=$_POST['studentreg'];
        header("location: Student work.php");
       }
       else{
        echo"<script>alert('Incorrect Passowrd');</script>";
       }
    }
    ?>
</body>
</html>