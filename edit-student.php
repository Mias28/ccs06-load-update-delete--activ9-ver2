<?php

require "config.php";

use App\Student;

$student_id = $_GET['id'];

$student = Student::getById($student_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Student</title>
</head>
<body>
<h1>Edit Student</h1>

<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $student->getId(); ?>">
	<div>
		<label>Name</label>
		<input type="text" name="name" placeholder=" Name" value="<?php echo $student->getname();?>" />	
	</div>
	<div>
		<label>Pet's gender</label>
		<input type="text" name="gender" placeholder="Pet's gender" value="<?php echo $student->getgender();?>" />	
	</div>
	<div>
		<label>Birthday</label>
		<input type="date" name="birthdate" placeholder="Birthday" value="<?php echo $student->getbirthdate();?>" />	
	</div>
	<div>
		<label>owner</label>
		<input type="text" name="owner" placeholder="Owner's name" value="<?php echo $student->getowner();?>" />	
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" value="<?php echo $student->getemail();?>" />	
	</div>
	<div>
		<label>Pet's Address</label>
		<input type="text" name="address" placeholder="Address" value="<?php echo $student->getaddress();?>" />	
	</div>
	<div>
		<label>Contact Number</label>
		<input type="text" name="contact_number" placeholder="Contact_number" value="<?php echo $student->getcontact_number();?>" />	
	</div>
	<div>
		<button>
			Save
		</button>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>