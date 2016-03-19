<?php

include("header.php");
include("controller/timeSheetController.php");
function convertToHoursMins($time, $format = '%02d:%02d') {
    if ($time < 1) {
        return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return sprintf($format, $hours, $minutes);
}
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

        <div class="table-responsive" id="payRollTable">
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
                <td><?php 
                  if (($record[2] - $record[1]) < 0 ) {
                    echo "00 hours 00 minutes";
                  } else { 
                          $diff =  strtotime($record[2]) - strtotime($record[1]);
                          $interval  = abs($diff);
                          $minutes   = round($interval / 60);

                    echo  convertToHoursMins($minutes, '%02d hours %02d minutes');  
                  }
                    ?>
                </td>
              </tr>
              <?php }?>
            </tbody>
          </table>

        </div>
                                             <button type="button" onclick="printReport('payRollTable')" class="btn btn-iconed btn-primary btn-sm  "><i class="fa fa-print" id="print"></i> Print</button>

      </div>

    </div>

  </div>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='assets/js/script.js'></script>
<script type="text/javascript">

  function printReport(divName) {

    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
     
}


</script>
</body>

</html>
