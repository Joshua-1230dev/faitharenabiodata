<?php
    // session_start();
    // if(!isset($_SESSION["user_name"])) {
    //   header("location:login.php");
    // }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>F_A Biodata Section</title>
    <link runat="server" rel="shortcut icon" href="images/favicon/cgm.png" type="image/x-icon" />
    <link rel="stylesheet" href="CSS/reg.css">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" />
      <!-- MD Bootstrap -->
    <link rel="stylesheet" href="CSS/css/mdb.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

</head>
<body>
        <header>

        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
          <a href="Reg-section.php"><img src="images/logo/cgmi.jpg" class="logo" alt="CGMI Logo"></a>
          <a href="Reg-section.php" class="brand" id="degree" style="color:#fff;">Faith Arena Biodata Form </a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Logout<span class="sr-only">(current)</span></a>
                        </li>
                      </ul>
                    </div>
        </nav>
       </header>


       <!-- main section 000-->
    <main>
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="images/ground.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"/>
                <div class="container">
                <div class="carousel-caption">
                         <h2 class="site-inn">Registration Successful</h2>
                         <p class="site-out" style="font-size: 20px;">Continue Below by Selecting Your Group</p>
            </div>
          </div>
        </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="images/003.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"/>
        <div class="container">
          <div class="carousel-caption">
                  <h2 class="site-title">church biodata</h2>
                  <p class="site-desc">Your Information inputted are Highly Secured</p>
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

        <!-- Section01 Beginning -->
        <div class="section01">
          <div class="box text-center">
            <h4 class="heading-4" id="typer-active"></h4>
          </div>
        </div>


<!-- modal 0001 -->

<!-- Modal -->
<div class="modal fade" id="ordain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title style" id="exampleModalLabel">Ordained Ministers</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
<div class="form-group"><br/>
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >First Name</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="fname"  placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Middle Name</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="mname" placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Surname</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="sname" placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="mobile number" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Mobile Number(s)</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="tel" placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Home Address</label>
    <textarea class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="homeadd" placeholder="---input---" rows="3" required></textarea>
</div>

  <div class="form-group">
    <label for="age" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Age</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="age"  placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="gender" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Gender:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="gender"  placeholder="---input---" required>
  </div>


  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Marital Status:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="marista" placeholder="---input---" required>
  </div>

    <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Occupation:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="occup" placeholder="---input---" required>
  </div>

     <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Personal Business:<small class="">Can be more than one</small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="perbus" placeholder="---input---" required>
  </div>

    <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Unit in Church:<small>Can be more than one</small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="marista" placeholder="---input---" required>
  </div>

      <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Email:</label>
    <input type="email" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="user_email" placeholder="---input---" required>
  </div>

<div class="form">
     <label class="label" >your profile picture:</label>
     <input type="file" id="real-file" name="prof" hidden="hidden" required>
      <button type="button"  class="btn-secondary" id="custom-button"><i class="fas upload fa-upload fa-1x"></i></button>
         <span id="custom-text">No Pic, Yet.</span>
   </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" data-dismiss="modal">Close</button>
<button type="submit" name="save_sch1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" class="btn btn-primary">Save</button>
</div>
       </form>
    </div>
  </div>
</div>

<!-- modal 0002 -->

<!-- Modal -->
<div class="modal fade" id="MMV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title style" id="exampleModalLabel">Mighty Men of Valour</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
<div class="form-group"><br/>
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >First Name</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="fname"  placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Middle Name</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="mname" placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Surname</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="sname" placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="mobile number" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Mobile Number(s)</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="tel" placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Home Address</label>
    <textarea class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="homeadd" placeholder="---input---" rows="3" required></textarea>
</div>

  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Age</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="age"  placeholder="---input---" required>
  </div>

    <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Occupation:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="occup" placeholder="---input---" required>
  </div>

     <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Personal Business:<small class="">Can be more than one</small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="perbus" placeholder="---input---" required>
  </div>

    <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Unit in Church:<small>Can be more than one</small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="marista" placeholder="---input---" required>
  </div>

      <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Email:</label>
    <input type="email" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="user_email" placeholder="---input---" required>
  </div>

   <div class="form">
     <label class="label" >your profile picture:</label>
     <input type="file" id="file" name="prof" hidden="hidden" required>
      <button type="button"  class="btn-secondary" id="custom"><i class="fas upload fa-upload fa-1x"></i></button>
         <span id="custom-text">No Pic, Yet.</span>
   </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:2px;" data-dismiss="modal">Close</button>
<button type="submit" name="save_sch1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:2px;" class="btn btn-primary">Save Data</button>
</div>
       </form>
    </div>
  </div>
</div>
<!-- modal 0003 -->

<!-- Modal -->
<div class="modal fade" id="CWFI" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title style" id="exampleModalLabel">CWFI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
<div class="form-group"><br/>
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >First Name</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="fname"  placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px;; color:rgba(255, 123, 0, 0.925);" >Middle Name</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="mname" placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Surname</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="sname" placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="mobile number" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Mobile Number(s)</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="tel" placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Home Address</label>
    <textarea class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="homeadd" placeholder="---input---" rows="3" required></textarea>
</div>

  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Age</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="age"  placeholder="---input---" required>
  </div>

    <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Occupation:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="occup" placeholder="---input---" required>
  </div>

     <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Personal Business:<small class="">Can be more than one</small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="perbus" placeholder="---input---" required>
  </div>

    <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Unit in Church:<small>Can be more than one</small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="marista" placeholder="---input---" required>
  </div>

      <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Email:</label>
    <input type="email" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="user_email" placeholder="---input---" required>
  </div>

<div class="form">
     <label class="label" >your profile picture:</label>
     <input type="file" id="real-file" name="prof" hidden="hidden" required>
      <button type="button"  class="btn-secondary" id="custom-button"><i class="fas upload fa-upload fa-1x"></i></button>
         <span id="custom-text">No Pic, Yet.</span>
   </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:2px;" data-dismiss="modal">Close</button>
<button type="submit" name="save_sch1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:2px;" class="btn btn-primary">Save Data</button>
</div>
       </form>
    </div>
  </div>
</div>

<!-- modal 0004 -->

<!-- Modal -->
<div class="modal fade" id="CYF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title style" id="exampleModalLabel">Christian Youth Fellowship</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
<div class="form-group"><br/>
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >First Name</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="fname"  placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Middle Name</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="mname" placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Surname</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="sname" placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="mobile number" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Mobile Number(s)</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="tel" placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Home Address</label>
    <textarea class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="homeadd" placeholder="---input---" rows="3" required></textarea>
</div>

  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Age</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="age"  placeholder="---input---" required> 
  </div>
  <div class="form-group">
    <label for="gender" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Gender:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="gender"  placeholder="---input---" required>
  </div>


  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Marital Status:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="marista" placeholder="---input---" required>
  </div>

    <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Occupation:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="occup" placeholder="---input---" required>
  </div>

     <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Personal Business:<small class="">Can be more than one</small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="perbus" placeholder="---input---" required>
  </div>

    <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Unit in Church:<small>Can be more than one</small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="marista" placeholder="---input---" required>
  </div>

      <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Email:</label>
    <input type="email" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="user_email" placeholder="---input---" required>
  </div>

<div class="form">
     <label class="label" >your profile picture:</label>
     <input type="file" id="real-file" name="prof" hidden="hidden" required>
      <button type="button"  class="btn-secondary" id="custom-button"><i class="fas upload fa-upload fa-1x"></i></button>
         <span id="custom-text">No Pic, Yet.</span>
   </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:2px;" data-dismiss="modal">Close</button>
<button type="submit" name="save_sch1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:2px;" class="btn btn-primary">Save Data</button>
</div>
       </form>
    </div>
  </div>
</div>

<!-- modal 0005 -->

<!-- Modal -->
<div class="modal fade" id="AFM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title style" id="exampleModalLabel">Agape Force Ministry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
<div class="form-group"><br/>
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >First Name</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="fname"  placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Middle Name</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="mname" placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Surname</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="sname" placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="mobile number" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Mobile Number(s)</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="tel" placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Home Address</label>
    <textarea class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="homeadd" placeholder="---input---" rows="3" required></textarea>
</div>

  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Age</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="age"  placeholder="---input---" required>
  </div>
  <div class="form-group">
    <label for="gender" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Gender:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="gender"  placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Marital Status:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="marista" placeholder="---input---" required>
  </div>

     <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Position in AFM:<small>If leader state your Position. else put member </small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="perbus" placeholder="---input---" required>
  </div>

    <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Unit in Church:<small>Can be more than one</small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="marista" placeholder="---input---" required>
  </div>

      <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Email:</label>
    <input type="email" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="user_email" placeholder="---input---" required>
  </div>

<div class="form">
     <label class="label" >your profile picture:</label>
     <input type="file" id="real-file" name="prof" hidden="hidden" required>
      <button type="button"  class="btn-secondary" id="custom-button"><i class="fas upload fa-upload fa-1x"></i></button>
         <span id="custom-text">No Pic, Yet.</span>
   </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:2px;" data-dismiss="modal">Close</button>
<button type="submit" name="save_sch1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:2px;" class="btn btn-primary">Save Data</button>
</div>
       </form>
    </div>
  </div>
</div>
<!-- modal 0006 -->

<!-- Modal -->
<div class="modal fade" id="KBM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title style" id="exampleModalLabel">Kingdom Builders Ministry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
<div class="form-group"><br/>
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >First Name:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="fname"  placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Middle Name:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="mname" placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);">Surname:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="sname" placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="mobile number" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Mobile Number:</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="tel" placeholder="---input---" required>
  </div>

   <div class="form-group">
    <label for="mobile number" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Parents/Guardians Number(s):</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="tel" placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="FormControlTextarea1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Home Address:</label>
    <textarea class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="homeadd" placeholder="---input---" rows="3" required></textarea>
</div>

  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Age:</label>
    <input type="number" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="age"  placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="gender" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Gender:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="gender"  placeholder="---input---" required>
  </div>

  <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);">Class:</label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="marista" placeholder="---input---" required>
  </div>

    <div class="form-group">
    <label for="" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:1px; color:rgba(255, 123, 0, 0.925);" >Unit in Church:<small>Can be more than one</small></label>
    <input type="text" class="form-control" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px;" id="" name="marista" placeholder="---input---" required>
  </div>

<div class="form">
     <label class="label" >your profile picture:</label>
     <input type="file" id="real-file" name="prof" hidden="hidden" required>
      <button type="button"  class="btn-secondary" id="custom-button"><i class="fas upload fa-upload fa-1x"></i></button>
         <span id="custom-text">No Pic, Yet.</span>
   </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:2px;" data-dismiss="modal">Close</button>
<button type="submit" name="save_sch1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; letter-spacing:2px;" class="btn btn-primary">Save Data</button>
</div>
       </form>
    </div>
  </div>
</div>
        <!-- section02 Beginning -->

<div class="section002 album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img class="bd-placeholder-img card-img-top" width="100%" height="270" src="images/OM.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <div class="card-body">
              <h4 class="card-title text-center">Ordained Ministers</h4>
              <p class="card-text">The members of the Christian Youth Fellowship of Church of God Mission International (Hereinafter referred to as "The Fellowship") Realizing the need for a viable fellowship of the youth in our mission for this end time, establishing an image of the youths, that cannot be despised, a people founded on God's sure word of prophecy, with integrity and for the purpose of promoting the welfare of members.</p>
              <div class="d-flex justify-content-center align-items-center">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn purple-gradient"  data-toggle="modal" data-target="#ordain">
                  <i class="fa fa-2x fa-registered"></i>egister
                  </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img class="bd-placeholder-img card-img-top" width="100%" height="270"  src="images/MMV.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <div class="card-body">
              <h4 class="card-title text-center"> Mighty Men of Valour</h4>
              <p class="card-text">The members of the Christian Youth Fellowship of Church of God Mission International (Hereinafter referred to as "The Fellowship") Realizing the need for a viable fellowship of the youth in our mission for this end time, establishing an image of the youths, that cannot be despised, a people founded on God's sure word of prophecy, with integrity and for the purpose of promoting the welfare of members.</p>
              <div class="d-flex justify-content-center align-items-center">
                                  <!-- Button trigger modal -->
                  <button type="button" class="btn purple-gradient" style="background-color:#5fa103; border:none;" data-toggle="modal" data-target="#MMV">
                     <i class="fa fa-2x fa-registered"></i>egister
                  </button>
             </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="270"  src="images/005.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" style="border-bottom:1px solid lightgray;" />
            <div class="card-body">
              <h4 class="card-title text-center"> CWFI </h4>
              <p class="card-text">Christian Women Fellowship International (CWFI) as a Faith-Based Non Governmental Organisation was founded in 1974 and had her first Convention in 1975.<br/> Our mission is to spread the gospel of our Lord Jesus Christ, build women leaders deeply rooted in Christ with a communal passion for souls and concern for the physical, mental, spiritual and healthy development of women, youth and the family in their areas of operation.</p>
              <div class="d-flex justify-content-center align-items-center">
                                  <!-- Button trigger modal -->
                  <button type="button" class="btn purple-gradient" style="background-color:#782e00; border:none;" data-toggle="modal" data-target="#CWFI">
                    <i class="fa fa-2x fa-registered"></i>egister
                  </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img class="bd-placeholder-img card-img-top" width="100%" height="270"  src="images/004.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <div class="card-body">
              <h4 class="card-title text-center"> Christian Youth Fellowship</h4>
              <p class="card-text">The members of the Christian Youth Fellowship of Church of God Mission International (Hereinafter referred to as "The Fellowship") Realizing the need for a viable fellowship of the youth in our mission for this end time, establishing an image of the youths, that cannot be despised, a people founded on God's sure word of prophecy, with integrity and for the purpose of promoting the welfare of members.</p>
              <div class="d-flex justify-content-center align-items-center">
                                  <!-- Button trigger modal -->
                  <button type="button" class="btn purple-gradient" style="background-color:#17400a; border:none;" data-toggle="modal" data-target="#CYF">
                   <i class="fa fa-2x fa-registered"></i>egister
                  </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img class="bd-placeholder-img card-img-top" width="100%" height="270"  src="images/007.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <div class="card-body">
              <h4 class="card-title text-center"> Agape Force Minitry</h4>
              <p class="card-text">The members of the Christian Youth Fellowship of Church of God Mission International (Hereinafter referred to as "The Fellowship") Realizing the need for a viable fellowship of the youth in our mission for this end time, establishing an image of the youths, that cannot be despised, a people founded on God's sure word of prophecy, with integrity and for the purpose of promoting the welfare of members.</p>
              <div class="d-flex justify-content-center align-items-center">
                                  <!-- Button trigger modal -->
                  <button type="button" class="btn purple-gradient" style="background-color:#5fa103; border:none;" data-toggle="modal" data-target="#AFM">
                    <i class="fa fa-2x fa-registered"></i>egister
                  </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img class="bd-placeholder-img card-img-top" width="100%" height="270"  src="images/006.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"/>
            <div class="card-body">
              <h4 class="card-title text-center"> Kingdom Builders Ministry</h4>
              <p class="card-text">The Kingdom Builders Ministry is the Children’s arm of Church of God Mission International established to evangelise, disciple, teach, train and preserve the next generation for Christ.<br/>
              The Children's Department of Church of God Mission International Incorporated was started by Pastor Mary Iguma, who was the first Typist for Archbishop Benson Idahosa in 1973.</p>
              <div class="d-flex justify-content-center align-items-center">
                                  <!-- Button trigger modal -->
                  <button type="button"  class="btn purple-gradient"  data-toggle="modal" data-target="#KBM">
                   <i class="fa fa-2x fa-registered"></i>egister
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>


          <footer>
            <div class="section003 form-inline justify-content-center">
              <h6 class="heading-6" style="margin-top: 10px;">copyright&copy; Church of God Mission Internation | Faith Arena Biodata</h6>
            </div>
          </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="Jquery/js/mdb.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="dist/https/www.unpackline/upload/load/src/typer.js"></script>
    <script src="dist/https/www.unpackline/upload/load/animat.js"></script>
    <script src="dist/https/www.unpackline/upload/load/loadup.js"></script>
    <script src="dist/https/www.unpackline/upload/load/0/loading0.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="dist/https/www.unpackline/upload/load/src/jquery.scrollnav.js"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>

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
       <!--  <script type="text/javascript">
               // Data Picker Initialization
            $('#date-picker').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
        </script>
                <script type="text/javascript">
               // Data Picker Initialization
            $('#date-picker2').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
        </script>
                <script type="text/javascript">
               // Data Picker Initialization
            $('#date-picker3').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
        </script>
                <script type="text/javascript">
               // Data Picker Initialization
            $('#date-picker4').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
        </script>
                <script type="text/javascript">
               // Data Picker Initialization
            $('#date-picker5').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
        </script>
                <script type="text/javascript">
               // Data Picker Initialization
            $('#date-picker6').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
        </script>

 -->
</body>
</html>
