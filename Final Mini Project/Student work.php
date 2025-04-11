<?php 
require("Connection.php");
session_start();
if(!isset($_SESSION['StudentLoginId'])){
    header("location: Student Login.php");
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
  
</head>
<body>
    <div class="header">
    <form method="POST" class="Logout">
    <a href="#" style="margin-left: 18px; margin-bottom: 2px;"><img src="img/eight.jpg" class = "logo" width="70px" height="60px"></a>     
    
    <button name="Logout">Log Out</button>
    <?php
    if(isset($_POST['Logout'])){
        session_destroy();
        header("location: Student Login.php");
    }
     ?>
</form>
</div>


 
    
        
        
        <?php
        
        $user=$_SESSION['StudentLoginId'];
        $query= "SELECT * FROM `student_marks table` WHERE `student_reg`=$user";
        $result=mysqli_query($con, $query);

        $num =mysqli_num_rows($result);
        

        if($num>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<table border='1'>";
                echo "<tr><th>STUDENT ID</th>
                <th>REGISTRATION NO</th>
                <th> SEMESTER</th>
                <th> SUBJECT 1</th>
                <th>SUBJECT 1 Marks</th>
                <th> SUBJECT 2</th>
                <th>SUBJECT 2 Marks</th>
                <th> SUBJECT 3</th>
                <th>SUBJECT 3 Marks</th>
                <th> SUBJECT 4</th>
                <th>SUBJECT 4 Marks</th>
                <th> SUBJECT 5</th>
                <th>SUBJECT 5 Marks</th>
                <th> SUBJECT 6</th>
                <th>SUBJECT 6 Marks</th>
               
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
                        
                        echo "</tr>";
                   
               
              
            }
            
        }
        else{
            echo "No records found";
           }
    

           echo" 
            </td>
        </tr>
 </table>";
        
        
 ?>
 </table>


  
   
    
</body>
</html>