<?php

include("header.php");
include("controller/reportController.php");

?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
</ol>

<div class="widget widget-blue">
          <span class="offset_anchor" id="bar_chart_anchor"></span>
          <div class="widget-title">
          
            <h3><i class="fa fa-bar-chart-o"></i> Report</h3>
          </div>
          <div class="widget-content">

            <div class="shadowed-bottom">
              <div class="row">
	<div id="chart1">
						
					</div>               
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='assets/js/script.js'></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.jqplot.js"></script>
<script type="text/javascript" src="assets/plugins/jqplot.barRenderer.js"></script>
<script type="text/javascript" src="assets/plugins/jqplot.pieRenderer.js"></script>
<script type="text/javascript" src="assets/plugins/jqplot.categoryAxisRenderer.js"></script>
<script type="text/javascript" src="assets/plugins/jqplot.pointLabels.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/jquery.jqplot.css" />
<script type="text/javascript">
	
	$(document).ready(function(){
        $.jqplot.config.enablePlugins = true;
        var s1 = <?php  echo json_encode($timeRecords); ?>;
        var ticks =  <?php echo json_encode($dateRecords); ?>;
         
        plot1 = $.jqplot('chart1', [s1], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            animate: !$.jqplot.use_excanvas,
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
                pointLabels: { show: true }
            },
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },
            highlighter: { show: false }
        });
     
        $('#chart1').bind('jqplotDataClick', 
            function (ev, seriesIndex, pointIndex, data) {
                $('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
            }
        );
    });
</script>
</body>

</html>
