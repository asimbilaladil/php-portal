<?php

include("header.php");
include("controller/viewMessageController.php");

?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">View Message</li>

</ol>
<div class="col-md-6 col-md-offset-3 scrolling">
<div class="widget widget-blue" id="widget_stats">
          <div class="widget-title">
  
            <h3><i class="fa fa-ok-circle"></i> Message Recevied On Date: <?php echo $date;?> </h3>
          </div>
          <div class="widget-content" style="display: block;">
            <form role="form" class="form-horizontal" action="controller/supportController.php" method="POST">
   
                           <div class="form-group">
                <div class="row">
    
                        <label class="col-md-4 control-label">Fullname:</label>
                  <div class="col-md-8">
                  <label class="col-md-4 control-label"><?php echo $fullname;?></label>
                     
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">Subject:</label>
                  <div class="col-md-8">
                  <label class="col-md-4 control-label"><?php echo $subject;?></label>
                    
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">Message:</label>
                  <div class="col-md-8">
                  <label class="col-md-4 control-label"><?php echo $message;?></label>
                  </div>
                </div>
              </div>
                            <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-8">

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
