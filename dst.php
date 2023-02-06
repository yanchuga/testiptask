<?php
function send($fname,$lname,$email,$phone) {
	try {
		$conn = new PDO("mysql:host=localhost;dbname=test", 'username3', 'password');
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//get all
		$all_sth = $conn->prepare("SELECT email FROM users");
		$all_sth->execute();
		$result = $all_sth->fetchAll();
		foreach($result as $row) {
			if($row['email'] == $email) {
				echo "Sorry you are already registered";
				break;
			}
			else {
		$sql = 'INSERT INTO users (fname, lname, email, phone)
		VALUES (?,?,?,?)';
		$stmt= $conn->prepare($sql);
		$stmt->execute([$fname, $lname, $email, $phone]);
		echo "New record created successfully";
			} 
		} 
	} 
	catch(PDOException $e) {
		echo "Sorry you are not registered. Check one more time, please";
		// echo $sql . "<br>" . $e->getMessage();
	}
}

$conn = null;