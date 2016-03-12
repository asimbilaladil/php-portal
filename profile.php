<?php

//include("controller/profileController.php");
include("header.php");

?>




<div class="col-md-6 col-md-offset-3 scrolling">
        <div class="widget widget-blue">
          <div class="widget-title">
            <h3><i class="fa fa-table"></i> Profile Information</h3>
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
                  <td><?php echo $_SESSION['fullname'];?></td>

                </tr>
                <tr>
                  <td>Username</td>
                  <td><?php echo $_SESSION['username'];?></td>

                </tr>
                <tr>
                  <td>Email</td>
                  <td><?php echo $_SESSION['email'];?></td>

                </tr>
                <tr>
                  <td>Department</td>
                  <td><?php echo $_SESSION['fullname'];?></td>

                </tr>
                <tr>
                  <td>Type</td>
                  <td><?php echo $_SESSION['type'];?></td>

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
