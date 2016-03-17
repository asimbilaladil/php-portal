<?php

//include("controller/profileController.php");
include("header.php");

?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Profile</li>
</ol>

<div class="col-md-6 col-md-offset-3 scrolling">
        <div class="widget widget-blue">
          <div class="widget-title">
            <h3><i class="fa fa-table"></i> Add new component salary type</h3>
          </div>
          <div class="clearfix">
</div>
          <div class="widget-content">
   
            <div class="table-responsive">
            <form action="controller/addComponentController.php" method="POST">
            <table class="table">
              <thead>
       
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-group">
                  
                      <input type="text" class="form-control" placeholder="Enter name " name="name">
                    </div>
                  </td>
                  

                </tr>
                <tr>
                <td>
                    <div class="form-group">
                  
                      <input type="text" class="form-control" placeholder="Enter currency" name="currency">
                    </div>
                  </td>                 

                </tr>
                <tr>
                <td>
                    <div class="form-group">
                  
                      <input type="text" class="form-control" placeholder="Enter pay-rate" name="payRate">
                    </div>
                  </td>                  

                </tr>
                <tr>
                <td>
                    <div class="form-group">
                  
                      <select class="form-control" name="payFrequency">
                            <option value="Hourly">Hourly</option>
                            <option value="Weekly">Weekly</option>
                            <option value="Monthly">Monthly</option>
                            <option value="Yearly">Yearly</option>
                            
                      </select>
                    </div>
                  </td>                  

                </tr>
      
              </tbody>

            </table>

          </div>

          <button name="submit" type="submit" class="btn btn-normal">Add</button>
          <a href="payroll.php"> <button name="button" type="button" class="btn btn-normal">Cancel</button></a> 

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
