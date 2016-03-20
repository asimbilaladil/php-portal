<?php
include("connection.php");


if( isset( $_POST["submit"] ) ) {

	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$fullname = $_POST["fullname"];
	$userId = $_POST["userId"];
	$email = $_POST["email"];
	$headers = "From: " .$email;

	
	$currentDate = date("Y-m-d");


	/*
	 *  Insert query for suppt table  
	 */

	$sql = "INSERT INTO support (subject, message, date, fullName, user_id, email)
	VALUES ('$subject', '$message', '$currentDate', '$fullname' ,'$userId', '$email')";


	/*
	 *  Excute insert query to insert data into clock table and redirect to clock page
	 */

	if ($conn->query($sql) === TRUE) {


	    /*
	     *  Select query to get user using type manager
	     */

	    $sql = "SELECT * FROM user where type ='Manager'";
	    $result = $conn->query($sql);

	    if ($result->num_rows > 0) {

	        while($row = $result->fetch_assoc()) {

	          $managerEmail = $row["email"];
	          //send email to each manager
	          mail($managerEmail, $subject, $message, $headers);


	    	   }
	    }
	    //Redirect user to support.php page
	    header("Location: ../support.php?error=1"); 

	} else {

	    echo "Error: " . $sql . "<br>" . $conn->error;

	}

}
if( isset( $_POST["reply"] ) ) {

	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$email =  $_POST["email"];
	$id =  $_POST["id"];
	$headers = "From: " . $_SESSION['email'];

	//send email to user 
	mail($email, $subject, $message, $headers);
	//redirect manager to viewMessage.php page
	$url = "Location: ../viewMessage.php?id=". $id ."&error=1";
	header($url); 

}
?>