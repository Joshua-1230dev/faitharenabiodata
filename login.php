
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bio-Login</title>
    <link runat="server" rel="shortcut icon" href="images/favicon/cgm.png" type="image/x-icon"/>
    <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="CSS/styles.css">
        <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="CSS/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="CSS/css/mdb.min.css">
    <link rel="stylesheet" href="CSS/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/?family=Roboto:300,400,500,700&display=swap">


</head>
<body>
  <!-- header navbar section -->
       <header>
       <nav class="navbar navbar-expand-lg navbar-light navbar-inverse fixed-top" id="navbar">
          <a href="login.php"><img src="images/logo/cgmi.jpg" class="logo" alt="CGMI Logo"></a>
          <a href="login.php" class="brand" id="degree" style="color:#fff;">Faith Arena Biodata Login</a>
        </nav>
       </header>
       <!-- /header navbar section -->

    <!-- Card -->
  <div class="card peach-gradient">
    <div class="card-body">
      <form method="POST" class="form" action="login.php" enctype="multipart/form-data" autocomplete="off">
        <p class="h4 text-center py-4" style="color:#fff; font-family:monospace;">Bio Login</p>
        <div class="md-form">
          <i class="fa fa-user prefix grey-text"></i>
          <input type="text" id="materialFormCardNameEx" name="username" class="form-control validate">
          <label for="username" class="font-weight-light">username</label>
        </div>

        <div class="md-form">
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" id="materialFormCardPasswordEx" name="user_pass" class="form-control validate">
          <label for="user_password" class="font-weight-light">password</label>
        </div>

        <div class="text-center py-4 mt-3">
          <a href="access.php" class="btn peach-gradient" name="login" type="submit">Login</a>
        </div>
      </form>
    </div>
  </div>
  <!-- Card -->

    
  <!-- jQuery -->
  <script type="text/javascript" src="Jquery/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="Jquery/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="Jquery/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="Jquery/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

 
</body>
</html>
