<?php 

include("connection.php");


if( isset( $_POST["submit"] ) ) {
    
    /*
     *  Get pay form details
     */

    $name = $_POST["name"];
    $payRate = $_POST["payRate"];
    $currency = $_POST["currency"];
    $payFrequency = $_POST["payFrequency"];
  


        /*
         *  Insert query for payRoll table  
         */
        
        $sql = "INSERT INTO payroll_components (name, payRate, currency, payFrequency)
        VALUES ('$name', '$payRate', '$currency', '$payFrequency')";


        /*
         *  Excute insert query to insert data into payRoll table and redirect to payRoll page
         */
        
        if ($conn->query($sql) === TRUE) {

            header("Location: ../payroll.php"); 

        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;

        }

  

}



?>