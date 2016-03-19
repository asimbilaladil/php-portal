<?php 

include("connection.php");


    $tempRecords = [];
    $userRecords = [];

    /*
     *  Select query to check username exists or not in user table
     */

    $sql = "SELECT * FROM support " ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
			$tempRecords = array($row["subject"], $row["date"], $row["support_id"] );
			array_push( $userRecords, $tempRecords );

    	}
      //  $_SESSION['userRecords'] = $userRecords;
    } 
    

?>