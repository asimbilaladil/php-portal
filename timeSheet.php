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
                <?php  
                    if($_SESSION["type"] == "Manager"){
                ?>
                <th>Control</th>
                <?php  
                   }
                ?>
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
                                <?php  
                    if($_SESSION["type"] == "Manager"){
                ?>
                               <td >
                   <a  href="timeSheet.php?id=<?php echo  $_GET['id']; ?>&key=<?php echo $key;?>&error=1" class="btn btn-default btn-xs">edit</a>
                <a href="controller/timeSheetController.php?id=<?php echo  $_GET['id']; ?>&rowId=<?php echo $record[3];?>" class="btn btn-danger btn-xs remove-tr"><i class="fa fa-times"></i></a>

                </td>
                  <?php }?>
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
<?php if( $_GET['error'] ==1 ) {?>
<div   class="modal fade in " id="modalFormStyle1" tabindex="-1" role="dialog" aria-labelledby="modalFormStyle1Label" aria-hidden="false" >

  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="widget widget-blue">
        <div class="widget-title">

          <h3><i class="fa fa-ok-circle"></i> Edit Time Sheet Record </h3>
        </div>
        <div class="widget-content">
          <div class="modal-body">
          <form role="form" class="form-horizontal" action="controller/updateTimeSheetController.php" method="POST">
              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">Date:</label>
                  <div class="col-md-8">
                    <input required type="text" class="form-control mask_money" placeholder="Enter Date" name="timesheetDate" value="<?php echo $timeRecords[$_GET['key']][0]; ?>">
                    
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">Clock In:</label>
                  <div class="col-md-8">
                    <input required type="text" class="form-control mask_money" placeholder="Enter Clock In" name="timesheetClockIn"  value="<?php echo $timeRecords[$_GET['key']][1]; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">Clock Out:</label>
                  <div class="col-md-8">
                    <input required type="text" class="form-control mask_money" placeholder="Enter Clock Out" name="timesheetClockOut" value="<?php echo $timeRecords[$_GET['key']][2]; ?>">
                  </div>
                </div>
              </div>
                            <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-8">
              <button type="submit" class="btn btn-normal" name="save">Save</button>
             <a href="timeSheet.php?id=<?php echo $_GET['id']; ?>"> <button type="button" class="btn btn-normal" name="cancel">Cancel</button></a> 
              <input name="id" type="hidden" value="<?php echo $_GET['id']; ?>" />
              <input name="rowId" type="hidden" value="<?php echo $timeRecords[$_GET['key']][3]; ?>" />

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
  <?php }?>
</body>

</html>


