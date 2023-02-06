<?php
$servername = "localhost";
$username = "username3";
$password = "password";
$dbname = "test";

function send($fname,$lname,$email,$phone) {
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 'INSERT INTO users (fname, lname, email, phone)
		VALUES (?,?,?,?)';
		$stmt= $conn->prepare($sql);
		$stmt->execute([$fname, $lname, $email, $phone]);
		echo "New record created successfully";
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}
send('hello','hello','hello','hello');

$conn = null;