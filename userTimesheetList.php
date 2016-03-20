<?php
 include("header.php");
 include("controller/userController.php");
 
?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Employee Time Sheet List</li>
</ol>

<div class="widget widget-blue">
      <div class="widget-title">

        <h3><i class="fa fa-table"></i>  Employee Time Sheet Records</h3>
      </div>
      <div class="widget-content">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Full Name</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ( $userRecords as $key =>  $user ) { ?>
              <tr>
                <td><?php echo $key+1; ?></td>
  
                <td>
                    <a href="timeSheet.php?id=<?php echo $user[6]; ?>">
                      <?php echo $user[0] ." ". $user[1] ; ?>
                    </a>
                </td>
                
         
              </tr>
              <?php } ?>

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
