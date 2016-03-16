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

    /*
     *  Select query to check username exists or not in user table
     */
    $userPayRecords = [];
    $tempRecords = [];
    $sql = "SELECT 
(select firstName from user where user.user_id = `user_id`) As firstName , 
(select lastName from user where user.user_id = `user_id`) As lastName ,
(select name from payroll_components where payroll_components.payroll_id = `component_id`) As componentName,
(select payFrequency from payroll_components where payroll_components.payroll_id = `component_id`) As payFrequency,
(select currency from payroll_components where payroll_components.payroll_id = `component_id`) As currency,
(select payRate from payroll_components where payroll_components.payroll_id = `component_id`) As payRate,
`salary`
FROM `payroll` ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
             $tempRecords =  array($row["firstName"], $row["lastName"],$row["componentName"], $row["payFrequency"], $row["currency"], $row["payRate"],  $row["salary"]   );
            array_push( $userPayRecords, $tempRecords );
        }
    } 


?>