
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faith Arena Biodata</title>
    <link runat="server" rel="shortcut icon" href="images/favicon/cgm.png" type="image/x-icon" />
    <link rel="stylesheet" href="CSS/styles.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" />
    <link rel="stylesheet"  href="CSS/font-awesome/css/font-awesome.min.css" >
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

</head>
<body >
        <header>

       <nav class="navbar navbar-expand-lg navbar-light navbar-inverse fixed-top" id="navbar">
          <a href="register.php"><img src="images/logo/cgmi.jpg" class="logo" alt="CGMI Logo"></a>
          <a href="register.php" class="brand" id="degree" style="color:#fff;">Faith Arena Biodata Form </a>
        </nav>
       </header>
       
 <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="images/003.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"/>
                <div class="container">
                <div class="carousel-caption">
                         <h2 class="site-title">church biodata</h2>
                         <p class="site-desc">Your Information inputted are Highly Secured</p>
            </div>
          </div>
        </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="images/ground.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"/>
        <div class="container">
          <div class="carousel-caption">
            <h1 class="site-title" id="title">We believe in You</h1>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

       <!-- main section 000-->
    <main>
        <!-- Section01 Beginning -->
        <div class="section01">
          <div class="box text-center">
            <h4 class="heading-4" id="typer-active"></h4>
          </div>
        </div>

        <!-- section02 Beginning -->
        <div class="section02">
             <div class="row justify-content-center">
                <div class="jumbotron back">
                    <form method="POST" class="form" action="home.php" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <input type="text" class="info" title="Your Name" id="" name="fname"  required>
                        <label>first name:</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="info" title="Required" id="" name="sname" required>
                         <label>middle name:</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="info" title="Required" id="" name="sname" required>
                           <label>surname:</label>
                    </div>
                    <div class="form-group">
                        <input type="number" class="info" title="Required" id="" name="tel" required>
                          <label>mobile number:</label>
                    </div>
                    <div class="form-group">
                       <textarea class="info" placeholder="Your Home Address" style="border:none; text-transform: none;" title="Your Home address Info" id="addr" name="homeadd" required></textarea>
                          <!-- <label>home address</label> -->
                    </div>
                    <div class="form-flex">
                        <input type="text" placeholder="Date of Birth" style="border:none;letter-spacing: 2px; font-weight: bold; " name="dob" title="Your DOB" id="date-picker" class="form-control datepicker">
                    <!-- <label>date of birth</label> -->
                    </div>
                    <div class="form-group">
                        <input type="number" class="info" id="" name="age" required>
                          <label>age:</label>
                    </div>
                     <div class="form-group">
                        <input type="text" class="info" id="" name="gender" required>
                          <label>gender:</label>
                    </div>
                     <div class="form-group">
                        <input type="text" class="info" id="" name="marista" required>
                          <label>Marital Status:</label>
                    </div>
                     <div class="form-group">
                        <input type="text" class="info" id="" name="occup" required>
                          <label>occupation:</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="info" id="" name="perbus" required>
                          <label>personal business:<small class="">Can be more than one</small></label>

                    </div>
                     <div class="form-group">
                        <input type="text" class="info" id="" name="uic" required>
                          <label>unit in church:<small class="">Can be more than one</small></label>
                    </div>
                     <div class="form-group">
                        <input type="number" class="info" id="" name="tcn" required>
                          <label>tithe card number:</label>
                    </div>
                     <div class="form-group">
                        <input type="email" class="info" id="" name="user_email" required>
                          <label>email:</label>
                    </div>
                     <div class="form-group">
                        <input type="text" class="info" id="" name="user_name" required>
                          <label>username:</label>
                    </div>
                     <div class="form-group">
                        <input type="password" class="info" id="" name="user_pass" required>
                          <label>password:</label>
                    </div>
                     <div class="form-group">
                        <input type="password" class="info" id="" name="user_cpass" required>
                          <label>comfirm password:</label>
                    </div>
                    <div class="form-group info">
                       <textarea class="info"  placeholder="Please kindly, write what you've observed in church, that needs improvement and with solutions." style="border:none; margin-bottom: none; text-transform: none;" title="Your statement would be looked into and Treated." id="addr-info" name="msgbpx" required></textarea>
                          <!-- <label>Message</label> -->
                    </div>
                    <div class="form-group">
                         <label class="label">Select profile picture:</label>
                            <input type="file" id="real-file" name="prof" hidden="hidden" required>
                                 <button type="button"  class="btn-secondary" id="custom-button"><i class="fa fa-upload fa-2x"></i></button>
                                     <span id="custom-text">No Pic, Yet.</span>
                    </div>
                      <div class="form-group">
                        <a href="secured.php" type="button" class="btn btn-secondary btn-lg save-btn" id="" name="btn-submit">
                          Submit<i class="fa fa-spinner fa-pulse fa-1x fa-fw" aria-hidden="true"></i></a>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

          <footer>
            <div class="section003 form-inline justify-content-center">
              <h6 class="heading-6" style="margin-top: 10px;">copyright&copy; Church of God Mission Internation | Faith Arena Biodata</h6>
            </div>
          </footer>

<!--     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="dist/https/www.unpackline/upload/load/animat.js"></script>
    <script src="dist/https/www.unpackline/upload/load/typer.js"></script>
    <script src="dist/https/www.unpackline/upload/load/verify.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="dist/https/www.unpackline/upload/load/src/typer.js"></script>
    <script src="dist/https/www.unpackline/upload/load/animat.js"></script>
    <script src="dist/https/www.unpackline/upload/load/loadup.js"></script>
    <script src="dist/https/www.unpackline/upload/load/loading.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="dist/https/www.unpackline/upload/load/src/jquery.scrollnav.js"></script>

    <script type="text/javascript">
      $(function() {
        $("#navbar").scrollNav({"bootstrap_mobile": true});
      });
    </script>

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

    <script type="text/javascript">
      (function() {

  var preload = document.getElementById("preload");
  var loading = 0;
  var id = setInterval(frame,64);

    function frame() {
      if(loading == 260) {
        clearInterval(id);
        window.open("register.php", "_self");
      }
      else {
        loading = loading + 1;
          if(loading == 90) {
            preload.style.animation = "fadeout is ease";
          }
      }
    }

})(); 
    </script>
    

        

</body>
</html>
