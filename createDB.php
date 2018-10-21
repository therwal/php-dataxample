<?php
include 'config.php';
try {
	$connection = new PDO($dsn , $username, $password, $options);
	$sql = file_get_contents("data/init.sql");
	$connection->exec($sql);
	
	echo "Database and tables created successfully.";
} catch (PDOException $error) {
	echo $sql . "<br>" . $error->getMessage();
}