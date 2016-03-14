<?php 

include("connection.php");


if( isset( $_POST["submit"] ) ) {
    $error = "ERROR";
    /*
     *  Get signup form details
     */

    $username = $_POST["username"];

    /*
     *  Select query to check username exists or not in user table
     */

    $sqlUser = "SELECT user_id FROM user where username = '".$username."'";
    $resultUser  = $conn->query($sqlUser);


    if ($resultUser->num_rows > 0) {

        while($rowUser = $resultUser->fetch_assoc()) {

            $userId = $rowUser["user_id"];
            $currentDate = date("Y-m-d");

            $sqlClock = "SELECT * FROM `clock` where `user_id` = ". $userId ." AND `date` = '". $currentDate ."'";
            $resultClock = $conn->query($sqlClock);


            if ($resultClock->num_rows > 0) {

                while($rowClock = $resultClock->fetch_assoc()) {

                    $clockId = $rowClock["clock_id"];
                    $clockOut =  date("h:i:sa");

                    $sql = "UPDATE clock SET clockOut='$clockOut' WHERE clock_id=".$clockId;

                    /*
                     *  Update query excute and redirect to clock page
                     */

                    if ($conn->query($sql) === TRUE) {

                        header("Location: ../clock.php?error=1"); 

                    } else {

                        header("Location: ../clock.php"); 
                    }

                
                }
            } else {

                /*
                 *  Insert query for clock table  
                 */
                $clockIn =  date("h:i:sa");

                $sql = "INSERT INTO clock (user_id, clockIn, date)
                VALUES ('$userId', '$clockIn', '$currentDate' )";


                /*
                 *  Excute insert query to insert data into clock table and redirect to clock page
                 */
                
                if ($conn->query($sql) === TRUE) {

                    header("Location: ../clock.php?error=1"); 

                } else {

                    echo "Error: " . $sql . "<br>" . $conn->error;

                }


            }
    	
    	}


        /*
         *  Redirect user to login page because invalid username or password
         */
    } else {

      header("Location: ../clock.php?errorMessage=invalid"); 

    }

}
?>