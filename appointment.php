<!DOCTYPE html>
	<html>
		<head>
			<title>Appointment Booking</title>
				<link rel="stylesheet" type="type/css" href="main.css" />
		</head>
<main>
	<h1>Appointment Booking</h1>
	<form action="." method="post">
		<fieldset>
			<legend>Appointment Booking</legend>
				<label>Name</label>
					<input type="text" name="name" value="<?php echo htmlspecialchars($first_name);?>">
					<?php echo $fields->getField('name')->getHTML();?><br>
					
					<label>Surname</label>
					<input type="text" name="surname" value="<?php echo htmlspecialchars($last_name);?>">
					<?php echo $fields->getField('surname')->getHTML();?><br>
					
					<label>Phone Number</label>
					<input type="text" name="phone" value="<?php echo htmlspecialchars($phone);?>">
					<?php echo $fields->getField('phone')->getHTML();?><br>
			
		
		
		
		</fieldset>





</main>

</html>
<?php include 'footer.php';?>