<?php 

include("connection.php");


    $tempRecords = [];
    $timeRecords = [];
    $userId = $_SESSION['userId'];

    if($_GET['id']){
        $userId = $_GET['id'];

    }

    /*
     *  Select query to check username exists or not in user table
     */

    $sql = "SELECT * FROM clock where user_id =".$userId. " ORDER BY date desc";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
			$tempRecords = array($row["date"], $row["clockIn"], $row["clockOut"]);
			array_push( $timeRecords, $tempRecords );

    	}
    } 
    

?>