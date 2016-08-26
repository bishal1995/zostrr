<?php

	# getting foem parameters
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$company = $_POST['company'];
	$message = $_POST['message'];
	echo "$firstname";
	# setting up db connection
	$servername = "localhost";
	$username = "root";
	$password = "Paul@1995";
	$dbname = "zostrr";	
	// setting up a new connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	// preparing the sql query
	$sql = "INSERT INTO adwith (firstname,lastname,email,phone,city,company,message) VALUES ('$firstname','$lastname','$email','$phone','$city','$company','$message')";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	// closing connection
	$conn->close();


	function redirect($url, $statusCode = 303)
	{
		header('Location: ' . $url, true, $statusCode);
	   	die();
	}
	$val = '../index.html';
	redirect($val);	



?>