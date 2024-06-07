<?php
//receive the values from html page

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$gender=$_POST['gender'];
$phone_number=$_POST['phone_number'];
$password=$_POST['password'];
$Faculty=$_POST['Faculty'];

//echo "The registration information is  ".$first_name." - " .$last_name." - " .$gender." - " .$phone_number." - " .$password." - ".$Faculty;

$connection = mysqli_connect('localhost','root','','end db');
if($connection->connect_error)die($connection_error);

$query = "INSERT INTO register (first_name,last_name,gender,phone_number,password,Faculty) VALUES ('$first_name','$last_name','$gender','$phone_number','$password','$Faculty')";
$result = $connection->query($query);
if(!$result)
  
  {
    echo "there was a problem inserting the values";
  }else{
  echo "query was successful";
} 
?>
