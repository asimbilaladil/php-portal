<?php

include("header.php");
include("controller/userInformationController.php");
$userRecords =  $_SESSION['userRecords'];
$indexNo = getUser();
?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">User Information</li>
</ol>

<div class="col-md-6 col-md-offset-3 scrolling">
        <div class="widget widget-blue">
          <div class="widget-title">
            <h3><i class="fa fa-table"></i> User Information</h3>
          </div>
          <div class="clearfix">
</div>
          <div class="widget-content">
   
            <div class="table-responsive">
            <table class="table">
              <thead>
       
              </thead>
              <tbody>
                <tr>
                  <td>Full Name</td>
                  <td><?php echo $userRecords[$indexNo][0] ; ?></td>

                </tr>
                <tr>
                  <td>Username</td>
                  <td><?php echo $userRecords[$indexNo][3] ; ?></td>

                </tr>
                <tr>
                  <td>Email</td>
                  <td><?php echo $userRecords[$indexNo][5] ; ?></td>

                </tr>
                <tr>
                  <td>Department</td>
                  <td><?php echo $userRecords[$indexNo][7] ; ?></td>

                </tr>
                <tr>
                  <td>Type</td>
                  <td><?php echo $userRecords[$indexNo][2] ; ?></td>

                </tr>
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>

  </div>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='assets/js/script.js'></script>


</body>

</html>
