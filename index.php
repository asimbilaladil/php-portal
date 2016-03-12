<?php
 include("controller/dashboardController.php");
 include("header.php");
?>

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
                <th>Username</th>
                <th>Status</th>
                <th>Control</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ( $userRecords as $user ) { ?>
              <tr>
                <td><?php echo "1"; ?></td>
                <td><?php echo $user[0] ." ". $user[1] ; ?></td>
                <td class="text-left"><?php echo $user[3]; ?></td>
                <?php if(!empty($user[2])) { ?>
                <td><span class="label label-success">Active</span></td>
                <?php  } else { ?>
                <td><span class="label label-warning">Pending</span></td>
                <?php  } ?>
                <td class="text-right">
                   <a href="#" class="btn btn-default btn-xs">edit</a>
                <a href="#" class="btn btn-danger btn-xs remove-tr"><i class="fa fa-times"></i></a>
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
