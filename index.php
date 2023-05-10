<?php

require "config.php";

use App\Student;

$students = Student::list();
?>

<h1>Pets</h1>

<table border="1" cellpadding="5">
<?php foreach ($students as $student): ?>
<tr>
<td><?php echo $student->getId(); ?></td>
<td><?php echo $student->getname(); ?></td>
<td><?php echo $student->getgender(); ?></td>
<td><?php echo $student->getbirthdate(); ?></td>
<td><?php echo $student->getowner(); ?></td>
<td><?php echo $student->getemail(); ?></td>
<td><?php echo $student->getaddress(); ?></td>
<td><?php echo $student->getcontact_number(); ?></td>
<td>
	<a href="edit-student.php?id=<?php echo $student->getId(); ?>">EDIT</a>
</td>
<td>
	<a href="delete-student.php?id=<?php echo $student->getId(); ?>">DELETE</a>
</td>
</tr>
<?php endforeach ?>
</table>