<?php

include("header.php");
include("controller/reportController.php");

?>
<div class="main-content">
    <ol class="breadcrumb" id="reportBreadcrumb">
  <li><a href="index.php">Home</a></li>
    <li class="active">Report</li>

</ol>

<div class="widget widget-blue">
          <span class="offset_anchor" id="bar_chart_anchor"></span>
          <div class="widget-title">
          
            <h3><i class="fa fa-bar-chart-o"></i> Report</h3>
          </div>
          <div class="widget-content">

            <div class="shadowed-bottom">
              <div class="row">
<div id="printableArea">

	<div id="chart_div">
						
					</div>  
          </div>

                           <button type="button" onclick="printReport('chart_div')" class="btn btn-iconed btn-primary btn-sm  "><i class="fa fa-print" id="print"></i> Print</button>

                <div class="col-sm-4 bordered" >
               
				
                </div>
                <div class="col-sm-8">
    
                </div>
              </div>
            </div>

          </div>
        </div>

  </div>

</div>


</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='assets/js/script.js'></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.jqplot.js"></script>
<script type="text/javascript" src="assets/plugins/jqplot.barRenderer.js"></script>
<script type="text/javascript" src="assets/plugins/jqplot.pieRenderer.js"></script>
<script type="text/javascript" src="assets/plugins/jqplot.categoryAxisRenderer.js"></script>
<script type="text/javascript" src="assets/plugins/jqplot.pointLabels.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<link rel="stylesheet" type="text/css" href="assets/css/jquery.jqplot.css" />

<script type="text/javascript">
      google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      
  var dateRecords =<?php echo json_encode($dateRecords); ?> ;
  var timeRecords = <?php  echo json_encode($timeRecords); ?>;
  var sum = 0;
  var data = new google.visualization.DataTable();
  for (var i in timeRecords){
      if(timeRecords[i] < 0 ){
          timeRecords[i] = 0;
      }
      sum = sum + timeRecords[i];
  }
  data.addColumn('string', 'Date');
  data.addColumn('number', sum + " Hrs");
  data.addColumn({type: 'number', role: 'annotation'});


  for(i = 0; i < dateRecords.length; i++)
  {
        data.addRow([dateRecords[i], timeRecords[i],timeRecords[i]]);
    
  }

  // Create and draw the visualization.

      var chart_div = document.getElementById('chart_div');
      var chart = new google.visualization.ColumnChart(chart_div);

      // Wait for the chart to finish drawing before calling the getImageURI() method.
      google.visualization.events.addListener(chart, 'ready', function () {
        chart_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
        //console.log(chart_div.innerHTML);
      });

      chart.draw(data, {});
  document.getElementById('png').outerHTML = '<a href="' + chart.getImageURI() + '">Printable version</a>';

  }

  function printReport(divName) {

    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
     
}


</script>
</html>
