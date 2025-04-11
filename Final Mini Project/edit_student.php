<?php
require("Connection.php");

$conn = mysqli_connect("localhost", "root", "", "learning");
if(mysqli_connect_error()){
    echo"Cannot connect to database";
    
}

$Student_id = $_GET['Student_id'];

$query = "SELECT * FROM `student_details` WHERE `Student_id`='$Student_id'";
$result=mysqli_query($conn, $query);

$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Student</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="edit_student.css">
</head>
<body>
    <div class="container" id="edit">
    <img src="img/eight.jpg" class = "logo" width="62px" height="55px">
    <h2>Edit Student</h2>
    <a style=" margin-left:45%; margin-top:20px;  padding:5px 25px; font-size:22px;  text-decoration:none;"class="open-button, btn btn-primary btn-block" href="Faculty work.php" >Faculty Home</a>
        </div>
        <form method="POST">
            <div class="form-group">
                <label for="Student_Name">STUDENT NAME:</label>
                <input type="text" class="form-control" id="Student_Name" name="Student_Name" value="<?php echo $row['Student_Name'];?>">
            </div>
            <div class="form-group">
                <label for="Student_Reg">REGISTRATION NO:</label>
                <input type="text" class="form-control" id="Student_Reg" name="Student_Reg" value="<?php echo $row['Student_Reg'];?>">
            </div>
            <div class="form-group">
                <label for="Semester">SEMESTER:</label>
                <input type="text" class="form-control" id="Student_Reg" name="Semester" value="<?php echo $row['Semester'];?>">
            </div>
            <div class="form-group">
                <label for="Department">Department:</label>
                <select name="Student_department" id="Student_department" class="form-control">
                <option value=" Civil" <?php if($row['Student_department'] == ' CIVIL'){ echo "selected"; }?>>CIVIL</option>
                    <option value=" CSE" <?php if($row['Student_department'] == ' CSE'){ echo "selected"; }?>>CSE</option>
                    <option value=" ELECTRICAL" <?php if($row['Student_department'] == ' ELECTRICAL'){ echo "selected"; }?>>ELECTRICAL</option>
                    <option value=" ELECTRONICS" <?php if($row['Student_department'] == ' ELECTRONICS'){ echo "selected"; }?>>ELECTRONICS</option>
                    <option value=" MECHANICAL" <?php if($row['Student_department'] == ' MECHANICAL'){ echo "selected"; }?>>MECHANICAL</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="Father_Name">FATHER NAME:</label>
                <input type="text" class="form-control" id="Father_Name" name="Father_Name" value="<?php echo $row['Father_Name'];?>">
            </div>
            <div class="form-group">
                <label for="Student_Phone">PHONE NUMBER:</label>
                <input type="text" class="form-control" id="Student_Phone" name="Student_Phone" value="<?php echo $row['Student_Phone'];?>">
            </div>
            <div class="form-group">
                <label for="Student_Email">EMAIL:</label>
                <input type="email" class="form-control" id="Student_Email" name="Student_Email" value="<?php echo $row['Student_Email'];?>">
            </div>
            <div class="form-group">
                <label for="Student_Address">ADDRESS:</label>
                <input type="text" class="form-control" id="Student_Address" name="Student_Address" value="<?php echo $row['Student_Address'];?>">
            </div>
            <div class="form-group">
                <label for="Student_State">STATE:</label>
                <input type="text" class="form-control" id="Student_State" name="Student_State" value="<?php echo $row['Student_State'];?>">
            </div>
            <div class="form-group">
                <label for="Student_City">CITY:</label>
                <input type="text" class="form-control" id="Student_City" name="Student_City" value="<?php echo $row['Student_City'];?>">
            </div>
            <div class="form-group">
                <label for="Pin_Code">PIN CODE:</label>
                <input type="text" class="form-control" id="Pin_Code" name="Pin_Code" value="<?php echo $row['Pin_Code'];?>">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>

    <?php
    if (isset($_POST['update'])) {
        $Student_Name =strtoupper($_POST['Student_Name']);
        $Student_Reg = $_POST['Student_Reg'];
        $Semester = $_POST['Semester'];
        $Department = strtoupper($_POST['Student_department']);
        $Father_Name = strtoupper($_POST['Father_Name']);
        $Student_Phone = $_POST['Student_Phone'];
        $Student_Email = strtoupper($_POST['Student_Email']);
        $Student_Address = strtoupper($_POST['Student_Address']);
        $Student_State = strtoupper($_POST['Student_State']);
        $Student_City = strtoupper($_POST['Student_City']);
        $Pin_Code = $_POST['Pin_Code'];

        $query = "UPDATE `student_details` SET `Student_Name`='$Student_Name', `Student_Reg`='$Student_Reg', `Semester`='$Semester', `Student_department`='$Department', `Father_Name`='$Father_Name', `Student_Phone`='$Student_Phone', `Student_Email`='$Student_Email', `Student_Address`='$Student_Address', `Student_State`='$Student_State', `Student_City`='$Student_City', `Pin_Code`='$Pin_Code' WHERE `Student_id`='$Student_id'";
        $result=mysqli_query($conn, $query);

        if($result){
            echo "<script> alert(' Record Updated Successfully'); 
            window.location.href='Faculty Work.php';
            
            </script>";
        }
        else{
            echo "Error updating student details";
        }
    }
   ?>
</body>
</html>