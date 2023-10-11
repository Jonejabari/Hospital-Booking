
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
<style>
    body
    {
       background-image: url(logo.jpg);
       height: 100vh;
       background-size: cover;
       background-position: center;
    }
    </style>
  <body>
    <div class="box" style= "color:maroon">
      <h1>Login Here</h1>
      <form name="login" action="" method="POST"  >
		<div class="inputBox" >
		
			<b>first_name  </b><input type="text"     name="first_name" placeholder="first_name"><br>
        
			<b>password    </b><input type="password" name="password" placeholder="password"><br>
        
        <input type="submit" name="submit" value="submit"><br>
        <a href="register.html" style= "color:black">Or Register Here</a>
		</div>	
    </form>

    </div>

  </body>
</head>
</html>
 

<?php

session_start();

if (isset($_POST['submit'])) {

$first_name = $_POST['first_name'];
$password = $_POST['password'];

$login = "SELECT * FROM register WHERE first_name='$first_name' AND password='$password'";
$result = mysqli_query($conn, $login);
$result2 = mysqli_num_rows($result);


if ($result2 == true) {
		

   $_SESSION['first_name'] = $first_name;
	
	header('Location: menu.html');
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