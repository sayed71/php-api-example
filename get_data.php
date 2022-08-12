<?php
 $conn=mysqli_connect("localhost","root","","test_db");
 
 $EmployeeID = $_POST['EmployeeID'];
 $Title = $_POST['Title'];


 $Sql_Query = "insert into task (EmployeeID,Title) values ($EmployeeID,'$Title')";
 
 if(mysqli_query($conn,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($conn);
?>