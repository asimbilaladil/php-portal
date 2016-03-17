<?php 

include("connection.php");


if( isset( $_POST["submit"] ) ) {
    
    /*
     *  Get salary form details
     */
    $payrollId = $_POST["payrollId"];
    $userId = $_POST["employee"];
    $componentId = $_POST["component"];
    $first_day_this_month = date('Y-m-01'); // hard-coded '01' for first day
    $last_day_this_month  = date('Y-m-31');
    $totalhr = 0;
    $payRate = 0;


    $sql = "SELECT * FROM clock where user_id =".$userId. " AND date >= '".$first_day_this_month. "' AND date <= '".$last_day_this_month."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
             $noOfHr =   $row["clockOut"] - $row["clockIn"];

            if ( $noOfHr > 0 ){
                 $totalhr = $totalhr + $noOfHr; 
            }
        }
        
    } 

    $sql = "SELECT * FROM payroll_components where payroll_id =".$componentId;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
                $payRate =   $row["payRate"];
        }
        
    }
        $salary = $payRate * $totalhr;

        /*
         *  Insert query for payRoll table  
         */
        
        $sql = "UPDATE  payroll SET user_id = '$userId' , component_id = '$componentId', salary = '$salary' where payroll_id = ".$payrollId;


        
         /*  
         * Excute insert query to insert data into payRoll table and redirect to payRoll page
         */
        if ($conn->query($sql) === TRUE) {

            header("Location: ../payroll.php"); 

        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;

        }

  

}


    /*
     *  Select query to check username exists or not in user table
     */

    $userRecords = [];
    $tempRecords = [];
    $componentRecords = [];
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
             $tempRecords =  array($row["user_id"], $row["firstName"], $row["lastName"] );
            array_push( $userRecords, $tempRecords );
        }
    } 

    /*
     *  Select query to check username exists or not in user table
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