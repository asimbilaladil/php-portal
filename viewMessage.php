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
                                <button onclick="popUp(0)" type="button" class="btn btn-normal" name="button">Reply</button>

                  </div>
                </div>
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
<script type="text/javascript">
  
  var popUp = function (val){

    var getDiv = document.getElementById("modalFormStyle1");
    if(val == 0){
      getDiv.style.display = "block";
    } else 
      getDiv.style.display = "none";
  }
</script>
<div   class="modal fade in modalPopUp" id="modalFormStyle1" tabindex="-1" role="dialog" aria-labelledby="modalFormStyle1Label" aria-hidden="false" >

  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="widget widget-blue">
        <div class="widget-title">

          <h3><i class="fa fa-ok-circle"></i> Message Reply </h3>
        </div>
        <div class="widget-content">
          <div class="modal-body">
          <form role="form" class="form-horizontal" action="controller/supportController.php" method="POST">
              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">Subject</label>
                  <div class="col-md-8">
                    <input required type="text" class="form-control mask_money" placeholder="Enter subject" name="subject" value="<?php echo "Reply: ".$subject;?>">
                    
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
              <button type="submit" class="btn btn-normal" name="reply">Send</button>
              <button onclick="popUp(1)" type="button" class="btn btn-normal" name="cancel">Cancel</button>
              <input name="id" type="hidden" value="<?php echo $_GET['id']; ?>" />
              
                  </div>
                </div>
              </div>
            </form>
    
   
               </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
           <a href="supportList.php"> <button type="button" class="btn btn-normal" data-dismiss="modal">Ok</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }?>
</body>

</html>
