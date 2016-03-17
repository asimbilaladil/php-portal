<?php 

include("connection.php");

    /*
     *  Get salary form details
     */
    $payrollId = $_GET["payrollId"];
        
        $sql = "DELETE  from payroll where payroll_id = ".$payrollId;
        
         /*  
         * Excute delete query to delete data from payRoll table and redirect to payRoll page
         */
        if ($conn->query($sql) === TRUE) {

            header("Location: ../payroll.php"); 

        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;

        }


?>