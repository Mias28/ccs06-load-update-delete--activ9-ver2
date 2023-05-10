<?php

require "config.php";

use App\Student;

try {
	Student::register('Patty','Female','12/5/2015', 'Doe', 'pats@gmail.com', 'Random city', '1234' );
	echo "<li>Added 1 pet";

	$students = [
		[
			'name' => 'Albert',
			'gender' => 'male',
			'birthdate' => '05/04/2021',
			'owner' => 'bruh',
			'email' => 'albert@gmail.com',
			'address' => 'Tondo',
			'contact_number' => '8085'
		],
		[
			'name' => 'Casper',
			'gender' => 'male',
			'birthdate' => '02/01/2020',
			'owner' => 'Jane',
			'email' => 'casper@gmail.com',
			'address' => 'Sa puso mo',
			'contact_number' => '8086'
		]
	];
	Student::registerMany($students);
	echo "<li>Added " . count($students) . " more students";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

