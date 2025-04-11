<?php
session_start();
$conn=mysqli_connect("localhost","root", "", "learning");
if(mysqli_connect_error()){
    echo"<script>
    alert('cannot connect to database');
    window.location.href='cart.php';
    </script>";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(!isset($_SESSION['FacultyLoginId'])){
        header("location: Faculty Login.php");
        exit; 
    }
    
    if(isset($_POST['submit'])){
      
        $Student_Reg = $_POST['Student_Reg'];
        $Student_sem = $_POST['Student_sem'];
        $Subject_1 = strtoupper($_POST['Subject_1']);
        $subject1marks = $_POST['subject1marks'];
        $Subject_2 = strtoupper($_POST['Subject_2']);
        $subject2marks = $_POST['subject2marks'];
        $Subject_3 = strtoupper($_POST['Subject_3']);
        $subject3marks = $_POST['subject3marks'];
        $Subject_4 = strtoupper($_POST['Subject_4']);
        $subject4marks =$_POST['subject4marks'];
        $Subject_5 = strtoupper($_POST['Subject_5']);
        $subject5marks = $_POST['subject5marks'];
        $Subject_6 = strtoupper($_POST['Subject_6']);
        $subject6marks =$_POST['subject6marks'];
       
        $sql = "INSERT INTO `student_marks table`(`student_reg`, Student_sem, `Subject_1`, `subject1marks`, `Subject_2`, `subject2marks`, `Subject_3`, `subject3marks`, `Subject_4`, `subject4marks`, `Subject_5`, `subject5marks`, `Subject_6`, `subject6marks`) VALUES ('$Student_Reg', '$Student_sem', '$Subject_1', '$subject1marks','$Subject_2','$subject2marks','$Subject_3','$subject3marks','$Subject_4','$subject4marks','$Subject_5','$subject5marks ',' $Subject_6','$subject6marks')";
    
        if($conn->query($sql) === TRUE){
           echo" <script>
            alert('Result added successfully');
            window.location.href='Faculty work.php';
            </script>";
    }
        } else{
            echo "Error:  No data found";
        }
    
       
        $conn->close();
    }
  
    ?>