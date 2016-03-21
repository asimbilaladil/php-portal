<?php 
include("connection.php");

if( isset( $_POST["save"] ) ) {
    
    /*
     *  Get signup form details
     */

    $timesheetDate = $_POST["timesheetDate"];
    $timesheetClockIn = $_POST["timesheetClockIn"];
    $timesheetClockOut = $_POST["timesheetClockOut"];
    $id = $_POST["id"];
    $rowId = $_POST["rowId"];
    /*
     *  Update query of user
     */

    echo $sql = "UPDATE clock SET date='$timesheetDate', clockIn='$timesheetClockIn' , clockOut='$timesheetClockOut' WHERE clock_id=".$rowId;

    /*
     *  Update query excute and redirect to dashboard page
     */

    if ($conn->query($sql) === TRUE) {

         header("Location: ../timeSheet.php?id=".$id); 

    } else {

       header("Location: ../timeSheet.php?id=".$id); 
    }

}


?>