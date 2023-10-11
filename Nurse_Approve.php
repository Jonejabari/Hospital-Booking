
<?php
	
	
	
	$appointment_id=$_POST['appointment_id'];
	$status=$_POST['status'];
	
	
	mysql_connect('localhost','root','') or die ('UNABLE TO CONNECT');
	mysql_select_db('end db') or die ('database was not selected');
	
	$cancel = "UPDATE app_table SET status = '$status' WHERE appointment_id = '$appointment_id'";

	mysql_query($cancel) or die ('ORDER STATUS NOT UPDATED'.mysql_error());
	 
	echo "<script>window.alert('Thank your appointment has been cancelled..!');</script>";
	header('location:app_or_dis.php');
	
	
	
?>