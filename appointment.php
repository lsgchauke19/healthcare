<!DOCTYPE html>
	<html>
		<head>
			<title>Appointment Booking</title>
				<link rel="stylesheet" type="text/css" href="main.css" />
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
					
					<label>E-mail</label>
					<input type="text" name="email" value="<?php echo htmlspecialchars($email);?>">
					<?php echo $fields->getField('email')->getHTML();?><br>
					
					<label>Appointment Date</label>
					<input type="text" name="date" value="<?php echo htmlspecialchars($date);?>">
					<?php echo $fields->getField('date')->getHTML();?><br>
					
					</fieldset>
					
					<p>Comments</p>
					<textarea name="comments" rows="4" cols="50"></textarea>
					
					
					<fieldset>
					<legend>Appointment Submission</legend>
					<label>&nbsp;</label>
					<input type="submit" name="action" value="submit">
			</fieldset>
		
		
		
		


<?php include 'fieldRegister.php';?>
<?php include 'validate.php';?>


</main>

</html>
<?php include 'footer.php';?>