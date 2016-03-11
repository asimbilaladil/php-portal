<?php 

include("connection.php");


if( isset( $_POST["submit"] ) ) {
    
    /*
     *  Get signup form details
     */

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    /*
     *  Select query to check username exists or not in user table
     */

    $sql = "SELECT * FROM user where username = '".$username."' AND password = '".$password."'" ;
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {

       		header("Location: dasboard.php"); 
    	
    	}


        /*
         *  Redirect user to login page because invalid username or password
         */
    } else {

      header("Location: login.php?errorMessage=invalid"); 

    }

}
?>