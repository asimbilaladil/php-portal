<?php 

include("connection.php");


if( isset( $_POST["submit"] ) ) {
    
    /*
     *  Get salary form details
     */

    $userId = $_POST["employee"];
    $componentId = $_POST["component"];
    $first_day_this_month = date('Y-m-01'); 
    $last_day_this_month  = date('Y-m-31');
    $totalhr = 0;
    $totalmin = 0;
    $payRate = 0;
       
       /*
         *  select query for clock table using user id to get clock in and out time
        */

    $sql = "SELECT * FROM clock where user_id =".$userId. " AND date >= '".$first_day_this_month. "' AND date <= '".$last_day_this_month."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {

           if(    $row["clockOut"] != '00:00:00'){
            $diff =  strtotime($row["clockOut"]) - strtotime( $row["clockIn"]);
            $interval  = abs($diff);
            $minutes   = round($interval / 60);
            $noOfHr = round(($minutes /60),2);
            $totalmin = $totalmin + $minutes; 
            
            }
       } 
       //get totla no of hrs that a user work
       $totalhr = round($totalmin /60,2);
    } 
        /*
         *  select query for payroll_components table using payroll id to get payrate
        */
    $sql = "SELECT * FROM payroll_components where payroll_id =".$componentId;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
                $payRate =   $row["payRate"];
        }
        
    }
        //calculate salary 
        $salary = $payRate * $totalhr;

        /*
         *  Insert query for payRoll table  
         */
        
        $sql = "INSERT INTO payroll (user_id, component_id, salary)
        VALUES ( '$userId', '$componentId', '$salary')";


        
         /*  
         * Excute insert query to insert data into payRoll table and redirect to payRoll page
         */
        if ($conn->query($sql) === TRUE) {
           header("Location: ../payroll.php"); 

        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;

        }

  

}




    $userRecords = [];
    $tempRecords = [];
    $componentRecords = [];
    /*
     *  Select query to get date from user table
     */
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
             $tempRecords =  array($row["user_id"], $row["firstName"], $row["lastName"] );
            array_push( $userRecords, $tempRecords );
        }
    } 

    /*
     *  Select query to get data from payroll_components table
     */
    $tempRecords = [];
    
    $sql = "SELECT * FROM payroll_components";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
             $tempRecords =  array($row["payroll_id"], $row["name"] );
            array_push( $componentRecords, $tempRecords );
        }
    } 
?>