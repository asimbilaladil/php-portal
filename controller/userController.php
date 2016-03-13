<?php 

include("connection.php");


    $tempRecords = [];
    $userRecords = [];

    /*
     *  Select query to check username exists or not in user table
     */

    $sql = "SELECT * FROM user " ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
			$tempRecords = array($row["firstName"], $row["lastName"], $row["type"], $row["username"], $row["userKey"], $row["email"], $row["user_id"], $row["department"] );
			array_push( $userRecords, $tempRecords );

    	}
        $_SESSION['userRecords'] = $userRecords;
    } 
    

?>