<?php

require "config.php";

try {
	$sql_users = "
		CREATE TABLE IF NOT EXISTS pets (
			id INT AUTO_INCREMENT PRIMARY KEY,
			name CHAR(6) NOT NULL,
			gender VARCHAR(50) NOT NULL,
			birthdate VARCHAR(70) NOT NULL,
			owner VARCHAR(100) NOT NULL,
			email VARCHAR(100) UNIQUE NOT NULL,
			address VARCHAR(255) NOT NULL,
			contact_number VARCHAR(20) NOT NULL,
			created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
		)
	";
	$conn->exec($sql_users);
	echo "<li>Created pets table";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}
