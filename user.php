<?php
 include("header.php");
 include("controller/userController.php");
 
?>
<div class="main-content">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">User</li>
</ol>

<div class="widget widget-blue">
      <div class="widget-title">

        <h3><i class="fa fa-table"></i>  Employee Records</h3>
      </div>
      <div class="widget-content">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Status</th>
                <?php  if($_SESSION["type"] == "Manager"){ ?>
                <th>Control</th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
            <?php foreach ( $userRecords as $key =>  $user ) { ?>
              <tr>
                <td><?php echo $key+1; ?></td>
  
                <?php if(!empty($user[2]) && !empty($user[7])  ) { ?>
                <td>
                    <a href="department.php?department=<?php echo $user[7]; ?>&userKey=<?php echo $user[4]; ?>">
                      <?php echo $user[0] ." ". $user[1] ; ?>
                    </a>
                </td>
                <td><span class="label label-success">Active</span></td>
                <?php  } else { ?>
                <td>
                      <?php echo $user[0] ." ". $user[1] ; ?>
                  
                </td>
                <td><span class="label label-warning">Pending</span></td>
                <?php  } 
                    if($_SESSION["type"] == "Manager"){
                ?>

                <td >
                   <a href="updateUser.php?userKey=<?php echo $user[4]; ?>" class="btn btn-default btn-xs">edit</a>
                <a href="controller/deleteController.php?userId=<?php echo $user[6]; ?>" class="btn btn-danger btn-xs remove-tr"><i class="fa fa-times"></i></a>

                </td>
                  <?php }?>
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
