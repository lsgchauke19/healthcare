
<!DOCTYPE html>
<html>
<head> 
	<title>Patient Sign-in</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
	

</head>
<body>
	
	<h1>ALT HEALTH CARE</>
		<h3>Patient Login</h3>
			<form action="." method="post">
		
		<fieldset>
			<legend>Please login</legend>
				<label>Username:</label>
				<input type="text" name="username" value="" class="textbox"/>
				<br>
				<label>Password:</label>
				<input type="password" name="password" value="" class="textbox"/>
				<br>
				<input type="submit" value="Submit" style="position:relative; top:20px; left: 19%;"/> 
				<br>
				<br>
				<p> If not a patient please <a href="register.php"> register</a></p>
				<br>
			
				<p><a href="admin_login.php">Admin Login</a></p>
				
				
		</fieldset>

		</form>


</body>
</html>


<?php include 'footer.php'; ?>