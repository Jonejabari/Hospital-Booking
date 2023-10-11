
<?php	
		$block = mysqli_connect("Localhost", "root", "", "end db");


		if ($block === false)
		{
			die("could not connect to the server and the database .". mysqli_connect_error());
		}

				$first_name ="";
			
				$sql = " UPDATE app_table SET email = null where first_name = '$_POST[first_name]'";

				if(mysqli_query($block, $sql))
				{
					echo "<p>You have successfully blocked a student from the system</p>";
					header("refresh: 3; url = AdminHome.html");
				}
				else
				{
					echo "<p>Students not blocked<p>";
					header("refresh: 3; url = AdminHome.html");
				}
		?>
	
		

<style>
	p{
		text-align:center;
		text-shadow:10px 10px 10px red;
		font-size:50px;
		padding-top:50px;
		padding-bottom:50px;
		}
		
</style>


