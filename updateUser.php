<?php
include("header.php");
include("controller/updateUserController.php");
$_SESSION['selectedUserKey'] = $_GET["userKey"];
$userRecords =  $_SESSION['userRecords'];
$indexNo = getUser();


?>




<div class="col-md-6 col-md-offset-3 scrolling" >
        <div class="widget widget-blue">
          <div class="widget-title">
     
            <h3><i class="fa  fa-user-md"></i> Edit User Prolie</h3>
          </div>
          <div class="widget-content">
            <form action="controller/updateUserController.php" role="form" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-md-4 control-label">Full Name</label>
                <div class="col-md-8">
                  <input type="text"  disabled="disabled" class="form-control" placeholder="<?php echo $userRecords[$indexNo][0] ; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Email</label>
                <div class="col-md-8">
                  <input type="text"  disabled="disabled" class="form-control" placeholder="<?php echo $userRecords[$indexNo][5] ; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Username</label>
                <div class="col-md-8">
                  <input type="text"  disabled="disabled" class="form-control" placeholder="<?php echo $userRecords[$indexNo][3] ; ?>">
                </div>
              </div>
                <div class="form-group">
                <label class="col-md-4 control-label">Department</label>
                <div class="col-md-8" >
                  <select class="form-control" name="department">
                    <option value="Finance">Finance</option>
                    <option value="Account">Account</option>
                    <option value="IT">IT</option>
                    <option value="Marketing">Marketing</option>
                  </select>
                </div>
              </div>
                    <div class="form-group">
                <label class="col-md-4 control-label">Account Type</label>
                <div class="col-md-8">
                  <select class="form-control" name="type">
                    <option value="Account">Account</option>
                    <option value="Employee">Employee</option>
                    <option value="Manager">Manager</option>
                  </select>
                </div>
              </div>
                <input name="userId" type="hidden"  class="form-control" value="<?php echo $userRecords[$indexNo][6] ; ?>">

              <div class="form-group">
                <div class="col-md-offset-4 col-md-8">
                  <button type="submit" class="btn btn-primary btn-normal" name="submit"> Update</button>
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
