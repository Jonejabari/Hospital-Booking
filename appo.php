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
					windows.location.href='Nurses.html';
				}
			}
		</script>
	</head>
	<body style= "color:orange" >
		

			<nav class="admin" >
				<ul>
					
					<li><a href="check_up.html">Check-up</a></li>
					<li><a href="ALL.html">Logout</a></li>
					
				</ul>
				

<div class="appr">
					<form action="Nurse_Approve.php" method="POST">
						<fieldset class="fieldset">
							<legend>APPOINTMENT APPROVAL</legend>
								<table cellspacing="20px">
									<tr>
										<td>Appointment NUMBER</td>
										<td><input type="NUMBER" name="appointmentID" placeholder="APPOINTMENT_ID"></td>
									</tr>
									<tr>
										<td>STATUS</td>
									</tr>
									<tr>
										<td><input type="radio" name="status" value=" APPROVED">APPROVE</td>
										<td><input type="radio" name="status" value="NOT APPROVED">NOT APPROVED</td>
									</tr>
									
								</table>
								<tr>
									<td><input type="submit" name="submit" value="UPDATE"></td>
								</tr>
						</fieldset>
					</form>
				</div>
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
