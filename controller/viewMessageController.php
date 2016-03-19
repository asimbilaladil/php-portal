<?php
    include("connection.php");

    $supportId = $_GET['id'];

    /*
     *  Select query to get message using support id
     */

    $sql = "SELECT * FROM support where support_id =".$supportId;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          $subject = $row["subject"];
          $message = $row["message"];
          $date = $row["date"];
          $fullname =  $row["fullName"];

    	   }
    }
?>