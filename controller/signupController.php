<?php 

include("connection.php");

/*
 *  Generate randon key for user
 */

function generateKey (){

    $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 15);
    return $randomString;
}

if( isset( $_POST["submit"] ) ) {
    
    /*
     *  Get signup form details
     */

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $userKey = generateKey();
    
    /*
     *  Select query to check username exists or not in user table
     */

    $sql = "SELECT username FROM user where username = '".$username."'";
    $result = $conn->query($sql);


    if ($result->num_rows < 1) {

        /*
         *  Insert query for user table  
         */
        
        $sql = "INSERT INTO user (firstName, lastName, email, password, username, userKey)
        VALUES ('$firstName', '$lastName', '$email', '$password', '$username', '$userKey' )";


        /*
         *  Excute insert query to insert data into user table and redirect to login page
         */
        
        if ($conn->query($sql) === TRUE) {

            header("Location: ../login.php"); 

        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;

        }

        /*
         *  Redirect user to signup page because username already exists
         */
    } else {

      header("Location: signup.php?errorMessage=Username Already Exists"); 

    }

}
?>