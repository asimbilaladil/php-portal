<?php 

include("connection.php");


/*
 *  Get User info from user session records 
 */

function getUser (){

     $userKey = $_GET['selectedUserKey'];
     $userRecords =  $_SESSION['userRecords'];
    foreach ($userRecords as $key => $user) {
        
        if( $user[4] == $userKey ){

            return $key;
        }

    }
}
 

?>