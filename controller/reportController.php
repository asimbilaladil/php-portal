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
            if(    $row["clockOut"] != '00:00:00'){
            $diff =  strtotime($row["clockOut"]) - strtotime( $row["clockIn"]);
            $interval  = abs($diff);
            $minutes   = round($interval / 60);
            $noOfHr = round(($minutes /60),2);
            
            } else {
                $noOfHr = 0;
            }
            array_push( $timeRecords, $noOfHr );
    	}
    } 
    

?>