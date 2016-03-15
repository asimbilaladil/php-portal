<?php 
include("connection.php");

    /*
     *  Select query to check username exists or not in user table
     */
    $payRecords = [];
    $tempRecords = [];
    $sql = "SELECT * FROM payroll_components ORDER BY payroll_id asc";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
             $tempRecords =  array($row["payroll_id"], $row["name"],$row["payRate"], $row["currency"], $row["payFrequency"] );
            array_push( $payRecords, $tempRecords );
        }
    } 


?>