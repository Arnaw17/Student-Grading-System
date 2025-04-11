<?php
session_start();
$conn=mysqli_connect("localhost","root", "", "learning");
if(mysqli_connect_error()){
    echo"<script>
    alert('cannot connect to database');
    window.location.href='Index.php';
    </script>";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(!isset($_SESSION['AdminLoginId'])){
        header("location: Admin Login.php");
        exit; 
    }
    
    if(isset($_POST['submit'])){
      
        $Student_Name = strtoupper($_POST['Student_Name']);
        $Student_Reg = $_POST['Student_Reg'];
        $Student_sem = $_POST['Student_sem'];
        $Student_Department = strtoupper($_POST['Student_Department']);
        $Father_Name = strtoupper($_POST['Father_Name']);
        $Student_Phone =$_POST['Student_Phone'];
        $Student_Email = $_POST['Student_Email'];
        $Student_Address =strtoupper($_POST['Student_Address']);
        $Student_State = strtoupper($_POST['Student_State']);
        $Student_City = strtoupper($_POST['Student_City']);
        $Pin_Code = $_POST['Pin_Code'];
        
        
        $sql = "INSERT INTO `student_details`(`Student_Name`, `Student_Reg`, `Semester`, `Student_department`, `Father_Name`, `Student_Phone`, `Student_Email`, `Student_Address`, `Student_State`, `Student_City`, `Pin_Code`) 
            VALUES ('$Student_Name','$Student_Reg','$Student_sem',' $Student_Department','$Father_Name','$Student_Phone','$Student_Email','$Student_Address','$Student_State','$Student_City','$Pin_Code')";
    
        if($conn->query($sql) === TRUE){
           echo" <script>
            alert('record added successfully');
            window.location.href='Student.php';
            </script>";
    }
        } else{
            echo '<div style="text-align: center; margin-top: 20px;">No records found</div>';
        }
    
       
        $conn->close();
    }
  
    ?>