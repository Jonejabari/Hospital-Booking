<?php

	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	//starting to connect
	mysql_connect('localhost','root','') or die ('UNABLE TO CONNECT');
	mysql_select_db('end db') or die ('COULD NOT CONNECT ');
 
 

	$login = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	
	
	mysql_query($login) or die ('ADMIN DETAILS NOT ENTERED PLEASE TRY AGAIN');
 

	echo "<script>window.alert('ADMIN DETAILS ARE SUCCESSFULLY ENTERED..!!');</script>";
	echo "<script>location href='AdminHome.html'</script>"; 
	include('AdminHome.html');
?>