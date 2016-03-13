<?php

//include("controller/profileController.php");
include("header.php");

?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
</ol>

<div class="col-md-6 col-md-offset-3 scrolling">
        <div class="widget widget-blue">
          <div class="widget-title">
            <h3><i class="fa fa-table"></i> Time-Clock  Attandence</h3>
          </div>
          <div class="clearfix">
</div>
          <div class="widget-content">
   
            <div class="table-responsive">
                        <div class="form-group">
              <div class="checkbox">
  
              </div>
            </div>
            <table class="table">
              <thead>
                  <tr>
                  <td>Username:</td>
                  <td> <?php echo $_SESSION['username'];?></td>

                </tr>       
              </thead>

              <tbody>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
              </tbody>
            </table>
                        <div class="form-group">
              <div class="checkbox">
  
              </div>
            </div>
            <button type="button" class="btn btn-normal">Clock-In</button>
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
