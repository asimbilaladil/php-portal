<?php 
session_start();
if( empty( $_SESSION ) ){
    header("Location: login.php"); 
}

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

<body class="x" >

<div class="all-wrapper fixed-header active-sub-menu horizontal-menu">
  <div class="page-header">
  <div class="header-links hidden-xs">

    <div class="dropdown">
      <ul class="dropdown-menu dropdown-inbar">
        <li><a href="profile.php"><i class="fa  fa-user"></i> Profile</a></li>
        <li><a href="controller/logoutController.php"><i class="fa fa-power-off"></i> Logout</a></li>
      </ul>
    </div>

    <div class="dropdown">
      <a href="#" class="header-link clearfix" data-toggle="dropdown">
        <div class="avatar">
          <img src="assets/images/avatar-small.jpg" alt="">
        </div>
        <div class="user-name-w">
        <?php echo $_SESSION['fullname'];?>
           <i class="fa fa-caret-down"></i>
        </div>
      </a>
      <ul class="dropdown-menu dropdown-inbar">
        <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
        <li><a href="controller/logoutController.php"><i class="fa fa-power-off"></i> Logout</a></li>
      </ul>
    </div>
  </div>
  <a class="logo hidden-xs" href="index.html"><i class="fa fa-rocket"></i></a>
  <h1>Web Portal</h1>
</div>

  <div class="top-menu">
  <div class="sidebar-wrapper">
  <ul>
    <li>
      <a href="index.php" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard">
        <i class="fa fa-home"></i>
      </a>
    </li>
    <li>
      <a href="user.php" data-toggle="tooltip" data-placement="right" title="" data-original-title="Forms">
        <i class="fa  fa-user-md"></i>
      </a>
    </li>
    <li>
      <a href="timeSheet.php" data-toggle="tooltip" data-placement="right" title="" data-original-title="UI Elements">
        <span class="badge"></span>
        <i class="fa  fa-clock-o"></i>
      </a>
    </li>
    <li>
      <a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Charts">
        <i class="fa fa-bar-chart-o"></i>
      </a>
    </li>
    <li>
      <a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tables">
        <i class="fa fa-th"></i>
      </a>
    </li>

  </ul>
</div>

  </div>

