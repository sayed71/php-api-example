<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

$CategoryName= $_POST['CategoryName'];

$conn=mysqli_connect("localhost","root","","");

if ($conn->connect_error) {
 
 die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM MobileDetails where MobileCompany = '$CategoryName'" ;

$result = $conn->query($sql);

if ($result->num_rows >0) {
 
 
 while($row[] = $result->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);
 
 }
 
} else {
 echo "No Results Found.";
}
 echo $json;

$conn->close();
}
?>