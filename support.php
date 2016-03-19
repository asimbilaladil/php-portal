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
  
            <h3><i class="fa fa-ok-circle"></i> Help/ Support</h3>
          </div>
          <div class="widget-content" style="display: block;">
            <form role="form" class="form-horizontal" action="controller/supportController.php" method="POST">
              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">Subject</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control mask_money" placeholder="Enter subject" name="subject">
                    
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">Message</label>
                  <div class="col-md-8">
					<textarea name="message" class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </div>
                            <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-8">
              <button type="submit" class="btn btn-normal" name="submit">Send</button>
              <input type="hidden" name="fullname" value="<?php echo $_SESSION['fullname']; ?>" />
              <input type="hidden" name="userId" value="<?php echo $_SESSION['userId']; ?>" />

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
     <?php 
                if( $_GET['error'] == 1){
                 ?>
<div   class="modal fade in" id="modalFormStyle1" tabindex="-1" role="dialog" aria-labelledby="modalFormStyle1Label" aria-hidden="false" style="display: block;">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="widget widget-blue">
        <div class="widget-title">

          <h3><i class="fa fa-ok-circle"></i> Help / Support Notification</h3>
        </div>
        <div class="widget-content">
          <div class="modal-body">
        
    
            <div class="form-group">
              <div class="checkbox">
                <strong><label>
      			Your message has been sent successfully!
                </label></strong>
              </div>
            </div>
           <a href="support.php"> <button type="button" class="btn btn-normal" data-dismiss="modal">Ok</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }?>
</body>

</html>
