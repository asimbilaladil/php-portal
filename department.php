<?php
 include("header.php");
 include("controller/departmentController.php");
 
?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Department</li>
</ol>

<div class="widget widget-blue">
      <div class="widget-title">

        <h3><i class="fa fa-table"></i>  Department Records</h3>
      </div>
      <div class="widget-content">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Name Of Department</th>
              </tr>
            </thead>
            <tbody>
            
              <tr>
                <td><?php echo "1"; ?></td>
                <td><a href="userInformation.php?selectedUserKey=<?php echo $userKey; ?>"><?php echo $department ; ?></a></td>
              </tr>

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
