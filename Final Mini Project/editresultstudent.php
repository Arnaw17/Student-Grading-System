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
  
    <script src="https://kit.fontawesome.com/e083b1a7aa.js" ></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"  href="student_work.css">
    <link rel="stylesheet"  href="addresult.css">
    
    
</head>
<body>
<div class="header">
        <form method="POST" class="Logout">
            <a href="#" style="margin-left: 18px; margin-bottom: 2px;"><img src="img/eight.jpg" class="logo" width="70px" height="60px"></a>     
          
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
   <a style="width:250px; height:50px; margin-left:120px; padding:10px 45px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block"  href="Add Result.php">ADD RESULT</></a>
   </div>
   <div class="form-group">
   <a style="width:250px; height:50px; margin-left:120px;  font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="search student.php" >SEARCH STUDENT</a>
   </div>
   <div class="form-group" id="edit1">
   <a style="width:250px; height:50px; margin-left:120px;  padding:10px 45px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="edit result.php" >EDIT RESULT</a>
   </div>
   </section>

    <table id="table" class="table table-bordered">
 
        <tbody>
        <?php
    if (isset($_POST['submit'])) {
        $semester = $_POST['Student_Semester'];
        
        $registration= $_POST['Student_Reg'];

        $query = "SELECT * FROM `student_marks table` WHERE `student_reg`='$registration' AND `Student_sem`='$semester'";
        $result=mysqli_query($con, $query);

        $num =mysqli_num_rows($result);
        

        if($num>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<table border='1'>";
                echo "<tr><th>STUDENT ID</th>
                <th>REGISTRATION NO</th>
                <th> SEMESTER</th>
                <th> SUBJECT 1</th>
                <th> Marks</th>
                <th> SUBJECT 2</th>
                <th> Marks</th>
                <th> SUBJECT 3</th>
                <th> Marks</th>
                <th> SUBJECT 4</th>
                <th> Marks</th>
                <th> SUBJECT 5</th>
                <th> Marks</th>
                <th> SUBJECT 6</th>
                <th> Marks</th>
               <th>EDIT</th>
                </tr>";
                echo "<tr>";
                        echo "<td>" . $row['Student_id'] . "</td>";
                        echo "<td>" . $row['student_reg'] . "</td>";
                        echo "<td>" . $row['Student_sem'] . "</td>";
                        echo "<td>" . $row['Subject_1'] . "</td>";
                        echo "<td>" . $row['subject1marks'] . "</td>";
                        echo "<td>" . $row['Subject_2'] . "</td>";
                        echo "<td>" . $row['subject2marks'] . "</td>";
                        echo "<td>" . $row['Subject_3'] . "</td>";
                        echo "<td>" . $row['subject3marks'] . "</td>";
                        echo "<td>" . $row['Subject_4'] . "</td>";
                        echo "<td>" . $row['subject4marks'] . "</td>";
                        echo "<td>" . $row['Subject_5'] . "</td>";
                        echo "<td>" . $row['subject5marks'] . "</td>";
                        echo "<td>" . $row['Subject_6'] . "</td>";
                        echo "<td>" . $row['subject6marks'] . "</td>";
                        echo "<td><a href='edit_result_student.php?Student_id=". $row['Student_id']. "'>Edit</a></td>";
                        echo "</tr>";
                   
               
              
            }
            
        }
        else{
            echo '<div style="text-align: center;">No records found</div>';
}
           }
    
   ?>
            
        </tbody>
    </table>
</body>
</html>
