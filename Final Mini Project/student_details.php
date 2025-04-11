<?php 
require("Connection.php");
$conn = mysqli_connect("localhost", "root", "", "learning");
if(mysqli_connect_error()){
    echo"Cannot connect to database";
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e083b1a7aa.js" ></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"  href="student_work.css">
    <link rel="stylesheet"  href="student_details.css">
    <link rel="stylesheet" href="addresult.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Spartan', sans-serif;
}

h1 {
    padding-left: 6%;
    font-size:25px;
    line-height: 60px;
    color: #e6e6e6;

}
    </style>
    
</head>
<body>
    <div class="header">
        <form method="POST" class="Logout">
            <a href="#" style="margin-left: 18px; margin-bottom: 2px;">
                <img src="img/eight.jpg" class="logo" width="70px" height="60px">
            </a>     
        
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
   <a style="width:250px; height:50px; margin-left:120px;  font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block"  href="Add Result.php">ADD RESULT</s></a>
   </div>
   <div class="form-group">
   <a style="width:250px; height:50px; margin-left:120px;  padding: 10px 0px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="search student.php" >SEARCH STUDENT</a>
   </div>
   <div class="form-group" id="edit1">
   <a style="width:250px; height:50px; margin-left:120px;    font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="edit result.php" >EDIT RESULT</a>
   </div>
   </section>

    <table id="table" class="table table-bordered">
 
        <tbody>
        <?php
  if (isset($_POST['submit'])) {
    $Student_semester = mysqli_real_escape_string($conn, $_POST['Semester']);
    $Student_Department = strtoupper(mysqli_real_escape_string ($conn, $_POST['Student_Department']));
    
    $query = "SELECT * FROM `student_details` WHERE `Semester` = '$Student_semester' AND `Student_department` = '$Student_Department'";
    $user_result = mysqli_query($conn, $query);

    if ($user_result) {
        if (mysqli_num_rows($user_result) > 0) {
             echo "<table border='1'>";
            echo '<thead><tr>
                    <th>STUDENT ID</th>
                    <th>STUDENT NAME</th>
                    <th>REGISTRATION NUMBER</th>
                    <th>SEMESTER</th>
                    <th>DEPARTMENT</th>
                    <th>FATHER NAME</th>
                    <th>PHONE NUMBER</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th>STATE</th>
                    <th>CITY</th>
                    <th>PIN CODE</th>
                    <th>EDIT</th>
                  </tr></thead><tbody>';

            while ($row = mysqli_fetch_assoc($user_result)) {
                echo "<tr>
                        <td>{$row['Student_id']}</td>
                        <td>{$row['Student_Name']}</td>
                        <td>{$row['Student_Reg']}</td>
                        <td>{$row['Semester']}</td>
                        <td>{$row['Student_department']}</td>
                        <td>{$row['Father_Name']}</td>
                        <td>{$row['Student_Phone']}</td>
                        <td>{$row['Student_Email']}</td>
                        <td>{$row['Student_Address']}</td>
                        <td>{$row['Student_State']}</td>
                        <td>{$row['Student_City']}</td>
                        <td>{$row['Pin_Code']}</td>
                        <td><a href='edit_student.php?Student_id=".$row['Student_id']."'>Edit</a></td>
                      </tr>";
            }

            echo '</tbody></table>';
        } else {
            echo '<div style="text-align: center; margin-top: 20px;">No records found</div>';
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>
            
        </tbody>
    </table>
</body>
</html>
