<?php
//receive the values from html page

$name=$_POST['name'];
$gender=$_POST['gender'];
$employee_No=$_POST['employee_No'];
$password=$_POST['password'];
$nationality=$_POST['nationality'];

//echo "The sign up information is  ".$name." - " .$gender." - ".$employee_No." - " .$password." - " .$nationality;

$connection = mysqli_connect('localhost','root','','end db');
if($connection->connect_error)die($connection_error);


$query = "INSERT INTO nurse_table (name,gender,employee_No,password,nationality) VALUE ('$name','$gender','$employee_No','$password','$nationality')";
$result = $connection->query($query);
if(!$result)


{
    echo "there was a problem inserting the values";
}

else

{
    echo "query was successful";
}  

?>