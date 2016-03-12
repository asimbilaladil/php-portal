<?php 

include("connection.php");


/*
 *  Get User info from user session records 
 */

function getUser (){

    $userKey = $_SESSION['selectedUserKey'];
    $userRecords =  $_SESSION['userRecords'];
    foreach ($userRecords as $key => $user) {
        
        if( $user[4] == $userKey ){
            return $key;
        }

    }
}
 

if( isset( $_POST["submit"] ) ) {
    
    /*
     *  Get signup form details
     */

    $userId = $_POST["userId"];
    $department = $_POST["department"];
    $type = $_POST["type"];
    
    /*
     *  Update query of user
     */

    $sql = "UPDATE user SET department='$department', type='$type' WHERE user_id=".$userId;

    /*
     *  Update query excute and redirect to dashboard page
     */

    if ($conn->query($sql) === TRUE) {

         header("Location: ../index.php"); 

    } else {

       header("Location: ../index.php"); 
    }

}
?>