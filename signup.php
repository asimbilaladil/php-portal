<?php 
session_start();
if( !empty( $_SESSION )){
    header("Location: index.php"); 
}
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <script type="text/javascript">

      var getQueryString = function ( field, url ) {
          var href = url ? url : window.location.href;
          var reg = new RegExp( '[?&]' + field + '=([^&#]*)', 'i' );
          var string = reg.exec(href);
          return string ? string[1] : null;
      };
      var errorMessage = getQueryString('errorMessage'); // returns 'chicken'
      if (errorMessage != null){
          alert("Username Already Exists");
      }
  </script>

  <link rel='stylesheet' href='assets/css/style.css'>

  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>

  <link href="assets/favicon.ico" rel="shortcut icon">
  <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Web Portal</title>

</head>

<body class="glossed">

<div class="all-wrapper no-menu-wrapper light-bg">
  <div class="login-logo-w">
    <a href="index.html" class="logo">
      <i class="fa fa-rocket"></i>
    </a>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">

      <div class="widget widget-blue">
        <div class="widget-title">
          <h3 class="text-center"><i class="fa fa-lock"></i> Sign Up</h3>
        </div>
        <div class="widget-content">
         <form action="controller/signupController.php" method="POST">

            <div class="lined-separator"></div>
            <div class="form-group relative-w">
              <input type="text" class="form-control" placeholder="First Name" name="firstName" required >
              <i class="fa fa-user input-abs-icon"></i>
            </div>
            <div class="form-group relative-w">
              <input type="text" class="form-control" placeholder="Last Name" name="lastName" required>
              <i class="fa fa-user input-abs-icon"></i>
            </div>
            <div class="form-group relative-w">
              <input type="text" class="form-control" placeholder="Username" name="username" required>
              <i class="fa  fa-user-md input-abs-icon"></i>
            </div>
            <div class="form-group relative-w">
              <input type="email" class="form-control" placeholder="Email" name="email" required>
              <i class="fa fa-envelope-o input-abs-icon"></i>
            </div>
            <div class="form-group relative-w">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
              <i class="fa fa-lock input-abs-icon"></i>
            </div>

            <input class="btn btn-success btn-rounded btn-iconed" name = "submit" type="submit">
              <span>Register Now</span>
              <i class="fa fa-arrow-right"></i>
            </input>
              
           
            <div class="no-account-yet">
              Already have an account? <a href="login.php">Login</a>
            </div>
          </form>
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