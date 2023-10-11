<?php
$first_name=$_POST['first_name'];
$email=$_POST['email'];
$message=$_POST['message'];


echo "Regestratin information captured is".$first_name."-".$email."-".$message;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "end db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO check_up (first_name,'email,message)
VALUES ('$first_name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

include('pane.html');
?>
