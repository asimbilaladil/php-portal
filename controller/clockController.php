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

            $sqlClock = "SELECT * FROM `clock` where `user_id` = ". $userId ." AND `date` = '". $currentDate ."' ORDER BY `clock_id` desc LIMIT 1";
            $resultClock = $conn->query($sqlClock);


            if ($resultClock->num_rows > 0) {

                while($rowClock = $resultClock->fetch_assoc()) {

                    if($rowClock["clockOut"] == '00:00:00'){

                        $clockId = $rowClock["clock_id"];
                        //$clockOut =  date("h:i:sa");
                        // $t = (60*60)*4;                  
                        // $timestamp =  $clockOut + $t ;

                        // echo $clockOut = date('h:i:sa', $timestamp);
                        $addTime = (60*60)*7;                  
                        $timestamp =  time() - $addTime;//+ $addTime ;

                        $clockOut = date('H:i', $timestamp);
                        $sql = "UPDATE clock SET clockOut='$clockOut' WHERE clock_id=".$clockId;

                        /*
                         *  Update query excute and redirect to clock page
                         */

                        if ($conn->query($sql) === TRUE) {

                            header("Location: ../clock.php?error=1&name=$username"); 

                        } else {

                            header("Location: ../clock.php"); 
                        }

                    } else {
                    /*
                     *  Insert query for clock table  
                     */
                    $addTime = (60*60)*7;                  
                    $timestamp =  time() - $addTime ;
                    $clockIn = date('H:i', $timestamp);

                    $sql = "INSERT INTO clock (user_id, clockIn, date)
                    VALUES ('$userId', '$clockIn', '$currentDate' )";


                    /*
                     *  Excute insert query to insert data into clock table and redirect to clock page
                     */
                    
                    if ($conn->query($sql) === TRUE) {

                        header("Location: ../clock.php?error=2&name=$username"); 

                    } else {

                        echo "Error: " . $sql . "<br>" . $conn->error;

                    }

                        }
                }
            } else {

                /*
                 *  Insert query for clock table  
                 */
                 //$clockIn =  date("h:i:sa");
                     $addTime = (60*60)*7;                  
                    $timestamp =  time() - $addTime ;

                    $clockIn = date('H:i', $timestamp);

                $sql = "INSERT INTO clock (user_id, clockIn, date)
                VALUES ('$userId', '$clockIn', '$currentDate' )";


                /*
                 *  Excute insert query to insert data into clock table and redirect to clock page
                 */
                
                if ($conn->query($sql) === TRUE) {

                    header("Location: ../clock.php?error=2&name=$username"); 

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