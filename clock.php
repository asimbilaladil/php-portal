<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  

  <link rel='stylesheet' href='assets/css/style.css'>

  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>

  <link href="assets/favicon.ico" rel="shortcut icon">
  <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Responsive Admin template based on Bootstrap 3</title>

</head>

<body class="glossed">

<div class="all-wrapper no-menu-wrapper light-bg scrolling">
  <div class="login-logo-w">
    <a href="index.html" class="logo">
      <i class="fa fa-rocket"></i>
    </a>
  </div>

  <div class="row">
            <div class="col-md-6 col-md-offset-3 scrolling">
        <?php if( $_GET['error'] ){
            echo '<div class="alert alert-success alert-dismissable">
                      <i class="fa fa-check-circle"></i>  Your time is successfully recorded.
                      <button type="button" class="close" data-dism"alert" aria-hidden="true">×</button>
                    </div>';
          } ?>
        <?php if( $_GET['errorMessage'] ){
            echo '<div class="alert alert-danger alert-dismissable">
                      <i class="fa fa-check-circle"></i>  Username not found!
                      <button type="button" class="close" data-dism"alert" aria-hidden="true">×</button>
                    </div>';
          } ?>
        <div class="widget widget-blue">
          <div class="widget-title">
            <h3><i class="fa fa-table"></i> Time-Clock  Attandence</h3>
          </div>
          <div class="clearfix">
</div>
          <div class="widget-content">
   
            <div class="table-responsive">
                        <div class="form-group">
              <div class="checkbox">
  
              </div>
            </div>
            <form method="POST" action="controller/clockController.php">
            <table class="table">
              <thead>
                  <tr>
                
            <div class="form-group relative-w">
              <input type="text" class="form-control" placeholder="Username" name="username" >
              <i class="fa fa-user input-abs-icon"></i>
            </div>

                </tr>       
              </thead>

              <tbody>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
              </tbody>
            </table>
                        <div class="form-group">
              <div class="checkbox">
  
              </div>
            </div>
            <button name="submit" type="submit" class="btn btn-normal">Clock-In / Out</button>
                      <div class="no-account-yet">
              Do you want to go on dashboard? <a href="index.php">Dashboard</a>
            </div>
            </form>
          </div>
          </div>
        </div>
      </div>
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='assets/css/script.js'></script>


</body>

</html>