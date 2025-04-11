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
    if(!isset($_SESSION['AdminLoginId'])){
        header("location: Admin Login.php");
        exit; 
    }
    
    if(isset($_POST['submit'])){
      
        $Faculty_Name = $_POST['Faculty_Name'];
        $Faculty_Uniqueno = $_POST['Faculty_Uniqueno'];
        $Faculty_Phone = $_POST['Faculty_Phone'];
        $Faculty_Email = $_POST['Faculty_Email'];
        $Department =$_POST['Department'];
        $Faculty_Password = $_POST['Faculty_Password'];
   
        
        $sql = "INSERT INTO `faculty_details` (Faculty_Name, Faculty_Uniqueno, Faculty_Phone, Faculty_Email, Department, Faculty_Password) 
                VALUES ('$Faculty_Name', '$Faculty_Uniqueno', '$Faculty_Phone', '$Faculty_Email', '$Department', '$Faculty_Password')";
    
        if($conn->query($sql) === TRUE){
           echo" <script>
            alert('Faculty Member Added Successfully');
            window.location.href='Faculty.php';
            </script>";
    }
        } else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
       
        $conn->close();
    }
  
    ?>