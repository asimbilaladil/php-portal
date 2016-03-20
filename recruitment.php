<?php

//include("controller/profileController.php");
include("header.php");

?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
    <li class="active"> Support</li>

</ol>
<div class="col-md-6 col-md-offset-3 scrolling">
<div class="widget widget-blue" id="widget_stats">
          <div class="widget-title">
  
            <h3><i class="fa fa-ok-circle"></i>Recruitment </h3>
          </div>
          <div class="widget-content" style="display: block;">
            <form role="form" class="form-horizontal" action="#"method="POST">
              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">Name</label>
                  <div class="col-md-8">
                    <input required type="text" class="form-control mask_money" placeholder="Enter Name" name="name">
                    
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">Job</label>
                  <div class="col-md-8">
                    <input required type="text" class="form-control mask_money" placeholder="Enter Job" name="job">
                    
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label"><?php 

$today = time();
$tz = new DateTimeZone('Europe/London');
echo $date = new DateTime($today, $tz);
?></label>
                  <div class="col-md-8">
                    <input required type="text" class="form-control mask_money" placeholder="Enter Type" name="type">
                    
                  </div>
                </div>
              </div>
                            <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-8">
              <button type="submit" class="btn btn-normal" name="submit">Add</button>
           
                  </div>
                </div>
              </div>
            </form>
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
