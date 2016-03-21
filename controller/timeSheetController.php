<?php 

include("connection.php");

error_reporting(0);
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
			$tempRecords = array($row["date"], $row["clockIn"], $row["clockOut"], $row["clock_id"]);
			array_push( $timeRecords, $tempRecords );

    	}
    } 

    if($_GET['rowId']){
        $sheetId = $_GET['rowId'];
        $sql = "DELETE  from clock where clock_id = ".$sheetId;
        
         /*  
         * Excute delete query to delete data from payRoll table and redirect to payRoll page
         */
        if ($conn->query($sql) === TRUE) {

            header("Location: ../timeSheet.php?id=".$userId); 

        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;

        }
    }

?>