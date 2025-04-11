<?php
require("Connection.php");
session_start();
if (!isset($_SESSION['FacultyLoginId'])) {
    header("location: Faculty Login.php");
    exit;
}

$Student_id = $_GET['Student_id'];

$query = "SELECT * FROM `student_marks table` WHERE `Student_id`='$Student_id'";
$result=mysqli_query($con, $query);

$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Student Result</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <script src="https://kit.fontawesome.com/e083b1a7aa.js" ></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"  href="edit_student.css">
    
    
    
</head>
<body>


    <div class="container" id="edit">
    <img src="img/eight.jpg" class = "logo" width="62px" height="55px">
        <h2>Edit Student result</h2>
        <a style=" margin-left:45%; margin-top:20px;  padding:5px 25px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="Faculty work.php" >Faculty Home</a>
        </div>
    <form method="POST">
        <div class="form-group">
            <label for="Student_id">STUDENT ID:</label>
            <input type="text" class="form-control" id="Student_id" name="Student_id" value="<?php echo $row['Student_id'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="student_reg">REGISTRATION NUMBER:</label>
            <input type="text" class="form-control" id="student_reg" name="student_reg" value="<?php echo $row['student_reg'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="Student_sem">SEMESTER:</label>
            <input type="text" class="form-control" id="Student_sem" name="Student_sem" value="<?php echo $row['Student_sem'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="Subject_1">SUBJECT 1:</label>
            <input type="text" class="form-control" id="Subject_1" name="Subject_1" value="<?php echo $row['Subject_1'];?>">
        </div>
        <div class="form-group">
            <label for="subject1marks">MARKS:</label>
            <input type="number" class="form-control" id="subject1marks" name="subject1marks" value="<?php echo $row['subject1marks'];?>">
        </div>
        <div class="form-group">
            <label for="Subject_2">SUBJECT 2:</label>
            <input type="text" class="form-control" id="Subject_2" name="Subject_2" value="<?php echo $row['Subject_2'];?>">
        </div>
        <div class="form-group">
            <label for="subject2marks">MARKS:</label>
            <input type="number" class="form-control" id="subject2marks" name="subject2marks" value="<?php echo $row['subject2marks'];?>">
        </div>
        <div class="form-group">
            <label for="Subject_3">SUBJECT 3:</label>
            <input type="text" class="form-control" id="Subject_3" name="Subject_3" value="<?php echo $row['Subject_3'];?>">
        </div>
        <div class="form-group">
            <label for="subject3marks">MARKS:</label>
            <input type="number" class="form-control" id="subject3marks" name="subject3marks" value="<?php echo $row['subject3marks'];?>">
        </div>
        <div class="form-group">
            <labelfor="Subject_4">SUBJECT 4:</label>
            <input type="text" class="form-control" id="Subject_4" name="Subject_4" value="<?php echo $row['Subject_4'];?>">
        </div>
        <div class="form-group">
            <label for="subject4marks">MARKS:</label>
            <input type="number" class="form-control" id="subject4marks" name="subject4marks" value="<?php echo $row['subject4marks'];?>">
        </div>
        <div class="form-group">
            <label for="Subject_5">SUBJECT 5:</label>
            <input type="text" class="form-control" id="Subject_5" name="Subject_5" value="<?php echo $row['Subject_5'];?>">
        </div>
        <div class="form-group">
            <label for="subject5marks">MARKS:</label>
            <input type="number" class="form-control" id="subject5marks" name="subject5marks" value="<?php echo $row['subject5marks'];?>">
        </div>
        <div class="form-group">
            <label for="Subject_6">SUBJECT 6:</label>
            <input type="text" class="form-control" id="Subject_6" name="Subject_6" value="<?php echo $row['Subject_6'];?>">
        </div>
        <div class="form-group">
            <label for="subject6marks">MARKS:</label>
            <input type="number" class="form-control" id="subject6marks" name="subject6marks" value="<?php echo $row['subject6marks'];?>">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $Student_id = $_POST['Student_id'];
        $student_reg = $_POST['student_reg'];
        $Student_sem = $_POST['Student_sem'];
        $Subject_1 = strtoupper($_POST['Subject_1']);
        $subject1marks = $_POST['subject1marks'];
        $Subject_2 = strtoupper($_POST['Subject_2']);
        $subject2marks = $_POST['subject2marks'];
        $Subject_3 = strtoupper($_POST['Subject_3']);
        $subject3marks = $_POST['subject3marks'];
        $Subject_4 = strtoupper($_POST['Subject_4']);
        $subject4marks = $_POST['subject4marks'];
        $Subject_5 = strtoupper($_POST['Subject_5']);
        $subject5marks = $_POST['subject5marks'];
        $Subject_6 = strtoupper($_POST['Subject_6']);
        $subject6marks = $_POST['subject6marks'];

        $query = "UPDATE `student_marks table` SET `student_reg`='$student_reg', `Student_sem`='$Student_sem', `Subject_1`='$Subject_1', `subject1marks`='$subject1marks', `Subject_2`='$Subject_2', `subject2marks`='$subject2marks', `Subject_3`='$Subject_3', `subject3marks`='$subject3marks', `Subject_4`='$Subject_4', `subject4marks`='$subject4marks', `Subject_5`='$Subject_5', `subject5marks`='$subject5marks', `Subject_6`='$Subject_6', `subject6marks`='$subject6marks' WHERE `Student_id`='$Student_id'";
        $result=mysqli_query($con, $query);

        if($result){
            echo "<script>
            alert('result updated successfully');
            window.location.href='Faculty Work.php';
            </script>";
        }
        else{
            echo "Error updating student result";
        }
    }
   ?>
</body>
</html>