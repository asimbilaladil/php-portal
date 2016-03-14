<?php

include("header.php");
include("controller/timeSheetController.php");

?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
    <li class="active">Time Sheet</li>
</ol>

<div class="widget widget-blue">
      <div class="widget-title">
  
        <h3><i class="fa fa-table"></i> Time Sheet </h3>
      </div>
      <div class="widget-content">

        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Clock-In</th>
                <th>Clock-Out</th>
                <th>No Of hour</th>
              </tr>
            </thead>
            <tbody>
  			  <?php foreach ( $timeRecords as $key =>  $record ) { ?>
  			  <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $record[0]; ?></td>
                <td><?php echo $record[1]; ?></td>
                <td><?php echo $record[2]; ?></td>
                <td><?php echo $record[2] - $record[1]; ?></td>
              </tr>
              <?php }?>
            </tbody>
          </table>
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
