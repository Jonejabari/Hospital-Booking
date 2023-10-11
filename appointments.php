<?php
	session_start();
?>
<!DOCTYPE HTML>

<html>
	<head>
			<link rel= "stylesheet" type = "text/css" href = "jone.css">
		<title>Student bookings</title>
		<meta @charset = "UTF-8">
		<link rel= "stylesheet" type = "text/css" href = "jone.css">
		
<script type="text/javascript">
			function reduction()
			{
				confirmation=confirm('Are you sure you want to cancel this appointment. Press Ok to continue');
				
				if (confirmation == true)
				{
					Thank your ap has been cancelled
				}
				else
				{
					alert('THANK YOU FOR YOUR SUPPORT');
					windows.location.href='menu.html';
				}
			}
		</script>
	</head>
	<style>
		body
		{
           background-image: url(logo.jpg);
           height: 100vh;
		   background-size: cover;
		   background-position: center;
		}
		</style>
	
	<body style= "color:black" >
		

			<nav class="admin" >
				<ul>
					
					<li><a href = "Appointment.html">Make Appointment</a></li>
					<li><a href = "ALL.html">Log out</a></li>
					
				</ul>

			</nav>
				<div class="out">
				<div class="inn">CANCEL APPOINTMENT</div>	
					<form class="loginform" action="Student_cancel.php" method="POST">
						<fieldset class="fieldset">
								<legend>PROVIDE THE FOLLOWING TO CANCEL BOOKINGS</legend>
								<table cellspacing="20px" class="regtables">
									<tr>
										<td>AppointmentID</td>
										<td><input type="number" name="appointment_id"  id="appointment_id"class="imput"
											placeholder="PROVIDE appointment_id"></td>
									</tr>
									<tr>
										<td>TO CANCEL APPOINTMENT</td>
										<td><input type="radio" name="status" value="Cancelled"><font color="red">CANCEL</font></td>
									</tr>
									
								</table>
								<tr>
									<td><input type="submit" name="cancel_booking" onclick="cancel()" value="CANCEL BOOKING" class="reg-subitbuttons"></td>
								</tr>
						</fieldset>
					</form>
		<div class="view">		
		<center><table border="solid" cellspacing="0"></center>
				<tr>
					<th>first_name</th>
					<th>last_name</th>
					<th>email</th>
					<th>appointment</th>
					<th>status</th>
					
					

				</tr>
				
			
	<?php
	//creatinng connection with mySql database
	$con=mysqli_connect("localhost","root","","end db");
	$sql=" SELECT *  FROM app_table";
			
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	
	
	
		
	if($count == 0){
		

		
	}
	else
	{	
			while( $row=(mysqli_fetch_array($result)))
		{
			
			$first_name=$row[0];
			$last_name=$row[1];
			$email=$row[2];
			$appointment=$row[3];
			$status=$row[4];
			
			

			echo "<tr>
			
					<td>$first_name</td>
					<td>$last_name</td>
					<td>$email</td>
					<td>$appointment</td>
					<td>$status</td>
				
					</tr>";
					
		}

	}	
	
	?>
	

	</table>
	</div>	
</body>
</html>

