<?php
 include("header.php");
 include("controller/supportListController.php");
 
?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Employee Messages List</li>
</ol>

<div class="widget widget-blue">
      <div class="widget-title">

        <h3><i class="fa fa-table"></i>  Employee Messages Records</h3>
      </div>
      <div class="widget-content">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ( $userRecords as $key =>  $user ) { ?>
              <tr>
                <td><?php echo $key+1; ?></td>
  
                <td>

                    <a href="viewMessage.php?id=<?php echo $user[2]; ?>">
                      <?php 
                      echo $user[0]; ?>
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
