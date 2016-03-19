<?php
include("connection.php");


if( isset( $_POST["submit"] ) ) {

	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$fullname = $_POST["fullname"];
	$userId = $_POST["userId"];
	$currentDate = date("Y-m-d");


	/*
	 *  Insert query for clock table  
	 */

	$sql = "INSERT INTO support (subject, message, date, fullName, user_id)
	VALUES ('$subject', '$message', '$currentDate', '$fullname' ,'$userId' )";


	/*
	 *  Excute insert query to insert data into clock table and redirect to clock page
	 */

	if ($conn->query($sql) === TRUE) {

	    header("Location: ../support.php?error=1"); 

	} else {

	    echo "Error: " . $sql . "<br>" . $conn->error;

	}

}

?>