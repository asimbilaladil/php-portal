<?php

include("header.php");
include("controller/addSalaryController.php");

?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Update Salary</li>
</ol>

<div class="col-md-6 col-md-offset-3 scrolling">
        <div class="widget widget-blue">
          <div class="widget-title">
            <h3><i class="fa fa-table"></i> Update Salary</h3>
          </div>
          <div class="clearfix">
</div>
          <div class="widget-content">
   
            <div class="table-responsive">
            <form action="controller/updateSalaryController.php" method="POST">
            <table class="table">
              <thead>
       
              </thead>
              <tbody>

    
                <tr>
                  <td>
                    <div class="form-group">
                  
                      <select class="form-control" name="employee">
                          <?php if(!empty( $userRecords )) {?>
              <?php foreach ( $userRecords as $key =>  $record ) { ?>
                            <option value="<?php echo $record[0];  ?>"><?php echo $record[1] . " " . $record[2]; ?> </option>
            
                            <?php }

                            } ?>
                      </select>
                    </div>
                  </td>                                

                </tr>
                <tr>
                <td>
                    <div class="form-group">
                  
                      <select class="form-control" name="component">
                            <?php if(!empty( $componentRecords )) {?>
          <?php foreach ( $componentRecords as $key =>  $record ) { ?>
                            <option value="<?php echo $record[0]; ?>"><?php echo $record[1]; ?></option>
         
                                 <?php 
                               }
                            } ?>
                      </select>
                    </div>
                  </td>                  

                </tr>
      <input type="hidden" name="payrollId" value="<?php echo $_GET['payrollId']; ?>">
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
