
<?php

$conn = mysqli_connect("localhost","root","","end db");

if (!$conn) {
	die("Connection failed: ".mysqli_connect());
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Login Form Design</title>
<link rel= "stylesheet" type = "text/css" href = "jone.css">
</head>
  <body>
    <div class="box" style= "color:maroon">
      <h1>Login Here</h1>
      <form name="login" action="" method="POST"  >
		<div class="inputBox" >
		
			<b>employee_No </b><input type="text" name="employee_No" placeholder="employee_No"><br>
        
			<b>password    </b><input type="password" name="password" placeholder="password"><br>
        
        <input type="submit" name="submit" value="submit"><br>
        <a href="nurse_reg.html" style= "color:black">Or Register Here</a>
		</div>	
      </form>

    </div>

  </body>
</head>
</html>
 

<?php

session_start();

if (isset($_POST['submit'])) {

$employee_No = $_POST['employee_No'];
$password = $_POST['password'];

$login = "SELECT * FROM nurse_table WHERE employee_No='$employee_No' AND password='$password'";
$result = mysqli_query($conn, $login);
$result2 = mysqli_num_rows($result);


if ($result2 == true) {
		

   $_SESSION['employee_No'] = $employee_No;
	
	header('Location: nurse_pane.html');
	echo '<script language="javascript">';
	echo 'alert("Your successfully logged in")';
	echo '</script>';
	
}
else {
	
	
	echo '<script language="javascript">';
	echo 'alert("Failed to login, your password is incorrect! Please try again.")';
	echo '</script>';
	
	}
}

?>