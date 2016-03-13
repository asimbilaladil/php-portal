<?php 

include("connection.php");

    /*
     *  Get userID from URL
     */

	$userId = $_GET["userId"];   
   
    
    /*
     *  Delete query of user
     */

   echo  $sql = "Delete from user where user_id =".$userId;

    /*
     *  Delete query excute and redirect to dashboard page
     */

    if ($conn->query($sql) === TRUE) {

         header("Location: ../user.php"); 

    } else {

      	header("Location: ../user.php"); 
    }

?>