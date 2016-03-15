<?php

include("header.php");
include("controller/payrollController.php");

?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
</ol>

<div class="row">
  <div class="col-md-12">
    <span class="offset_anchor" id="widget_tabs"></span>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_pie_chart" data-toggle="tab"><i class="fa fa-bullseye"></i>Salary Component Types</a></li>
      <li class=""><a href="#tab_bar_chart" data-toggle="tab"><i class="fa fa-bar-chart-o"></i> Employee Salary</a></li>
    </ul>
    <div class="tab-content bottom-margin">
      <div class="tab-pane active" id="tab_pie_chart">
        <div class="shadowed-bottom">
          <div class="row">

          </div>
        </div>
        <div class="padded">
<div class="widget widget-blue">
          <div class="widget-title">
    
            <h3><i class="fa fa-table"></i> List Of SAalary Components Type</h3>
          </div>
          <div class="widget-content">
  <a href="addComponent.php"><button type="button" class="btn btn-normal">Add</button></a>
    <div class="form-group">
              <div class="checkbox">
  
              </div>
            </div>
            <div class="table-responsive">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Pay-Rate</th>
                  <th>Currency</th>
                  <th>Pay Frequency</th>

                </tr>
              </thead>
              <tbody>
              <?php if(!empty( $payRecords )) {?>
              <?php foreach ( $payRecords as $key =>  $record ) { ?>
                <tr>
                  <td><?php echo "B".$record[0];?></td>
                  <td><?php echo $record[1];?></td>
                  <td><?php echo $record[2];?></td>
                  <td><?php echo $record[3];;?></td>
                  <td><?php echo $record[4];;?></td>
                </tr>
               <?php }

               } ?>
              </tbody>
            </table>
            </div>
          </div>
        </div>

                </div>
      </div>
            <div class="tab-pane " id="tab_bar_chart">
        <div class="shadowed-bottom">
          <div class="row">

          </div>
        </div>
        <div class="padded">
<div class="widget widget-blue">
          <div class="widget-title">
    
            <h3><i class="fa fa-table"></i> List Of SAalary Components Type</h3>
          </div>
          <div class="widget-content">
  <a href="addSalary.php"><button type="button" class="btn btn-normal">Add</button></a>
    <div class="form-group">
              <div class="checkbox">
  
              </div>
            </div>
            <div class="table-responsive">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Employee</th>
                  <th>Salary Component</th>
                  <th>Pay Frequency</th>
                  <th>Currency</th>
                  <th>Amount</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
              <?php if(!empty( $payRecords )) {?>
              <?php foreach ( $payRecords as $key =>  $record ) { ?>
                <tr>
                  <td><?php echo "B".$record[0];?></td>
                  <td><?php echo $record[1];?></td>
                  <td><?php echo $record[2];?></td>
                  <td><?php echo $record[3];;?></td>
                  <td><?php echo $record[4];;?></td>
                  <td><?php echo $record[4];;?></td>
                </tr>
               <?php }

               } ?>
              </tbody>
            </table>
            </div>
          </div>
        </div>        </div>
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
