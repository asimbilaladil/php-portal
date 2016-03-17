<?php 

include("connection.php");


    $dateRecords = [];
    $timeRecords = [];
    if($_SESSION["type"] == "Manager"){ 
        $userId = $_GET['userId'];
     } else {
        $userId = $_SESSION['userId'];
     }
    

    /*
     *  Select query to check username exists or not in user table
     */

    $sql = "SELECT * FROM clock where user_id =".$userId. " ORDER BY date desc";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
			array_push( $dateRecords, $row["date"]);
            array_push( $timeRecords, ($row["clockOut"] - $row["clockIn"]) );
    	}
    } 
    

?>