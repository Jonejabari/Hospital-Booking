<?php
    //receive the values from html page

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];

//echo "The sign up information is  ".$first_name." - " .$last_name." - ".$email;
    
   $connection = mysqli_connect('localhost','root','','end db');
   if($connection->connect_error)die($connection_error);

   
   $query = "INSERT INTO app_table (first_name,last_name,email) VALUE ('$first_name','$last_name','$email')";
   $result = $connection->query($query);
   if(!$result)

{
    echo "there was a problem inserting the values";
}

  else

  {
    echo "query was successful";
  }  

  include ('menu.html');
?>