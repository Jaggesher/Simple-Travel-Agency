<?php
 session_start();
 !include "phpCode.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Travel Agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="Jqury/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="CSS/index.css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#packages">PACKAGE</a></li>
        <?php
          if(is_auth()=="yes"){
            echo '<li class="dropdown" >
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
            <span class="caret"></span></a>
            <ul class="dropdown-menu" style="color: black;">
              <li><a href="#" data-toggle="modal" data-target="#addPackage" >Add Package</a></li>
              <li><a href="#" data-toggle="modal" data-target="#deletePackage" >Remove Package</a></li>
              <li><a href="LogOut.php">LogOut</a></li> 
            </ul>
          </li>';
          }else{
            echo '<li><a href="#" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-log-in"></span>ADMIN</a></li>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>DreamTravels.com</h1> 
  <p>Your Tour Our Responsiblity.</p> 
</div>


<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About DreamTravels.com</h2><br>
      <h4> DreamTravels.com is a Tour Operator and Travel Agency,Helicopter charter ,Helicopter rental service ,eliocpter charter in dhaka,dhaka Helicopter service being managed by a team of professionals with several years of experience in the field of Tours & Travel trade and in the field of hospitality in Bangladesh.</h4><br>
      <p>As a  Tours & Travel Agency, we are offering service of International & Domestic Air Ticketing and Helicopter charter service on different Airlines (Online/Offline) and to different destinations. Winux Tours & Travels also under take Hotel riservation & Tours Reservations all over Bangladesh, Transportations for ground handling and Hotel reservations. Winux Tours & Travels always intend to provide the best possible Hotel accommodation to our clients in different destinations at very reasonable cost.  Winux Tours & Travels Gates The ADS member. Which is Very helpfull to chiness Torism.Our Membership Serial Number 58. </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>



<div id="services" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Services</h2><br>
      <h3> We are ready to serve you for your any travel related services.</h3><br>
      <h4 class="alert alert-info"><strong>Package Tours:</strong><br>Holidays Tours organize different regular package tours to all over the Bangladesh for different group size. </h4>

      <h4 class="alert alert-info"><strong>City Sightseeing Tours:</strong><br>We arrange Full day and Half-day City Sightseeing tour at Dhaka and its surroundings for any group size. </h4>

      <h4 class="alert alert-info"><strong>River Cruise:</strong><br>We arrange Exclusive River Cruise at Sadarghat, Pagla, Demra or Asulia for a group of minimum15 persons for full day. During the City Tours all so we arrange 3 hours river Cruise, country boat can be used for this cruise. </h4>


      <h4 class="alert alert-info"><strong>Cultural and Festival tours:</strong><br> We arrange some special types of tours in special occasions like cultural festival at Lalon Shah's birth and death anniversary, Rash Mela at Dublar Char in Sunderban , during Rash Purnima, Bijaya Dashami at Dhakeshwari Temple,Bengali new year's festival at Dhaka.</h4>

      <h4 class="alert alert-info"><strong>Study Tours:</strong><br> As a developing country Bangladesh is an ideal place where a student from any country , can learn a lot. We open that opportunity for the both domestic and international students those who are not only visit Bangladesh but also learn something.</h4>

      <h4 class="alert alert-info"><strong>NGO Tour:</strong><br>You can visit some NGOs through us. We can show you how they are working for the society and the peoples. Also we shall show you how the rural people developing themselves by using the proper effect of micro credit systems.</h4>

      <p><strong>Guide and Interpreter:</strong> We have full time English and Japanese speaking staffs. We shall provide English, Japanese Korean and Chinese interpreter and tour guides.</p>
    </div>
  </div>
</div>



<!-- Container (Package Section) -->
<div id="packages" class="container-fluid text-center">
    <h2>RECENT PACKAGES</h2>
    <h4>What we offer</h4>
    <br>
    <?php
      echo showResult();
    ?>
</div>




<!-- LogIn model Section -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Admin</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="LogMein.php" method="post">
            <div class="form-group">
              <label for="userid"><span class="glyphicon glyphicon-user"></span> Admin ID.</label>
              <input type="text" class="form-control" id="userid" name="userid" placeholder="Admin ID">
            </div>
            <div class="form-group">
              <label for="usrpass"><span class="glyphicon glyphicon-user"></span> Password.</label>
              <input type="Password" class="form-control" id="usrpass" name="usrpass" placeholder="Enter Password">
            </div>
              <button type="submit" class="btn btn-block">Submit 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Add package model Section -->
<div class="modal fade modal-fullscreen  " id="addPackage"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Admin(add-package)</h4>
          </div>
          <div class="modal-body container-fluid">
              <div class="col-md-8 col-md-offset-2 well">
                <form action="addPackage.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">

                  <div class="form-group">
                      <label class="col-md-3 control-label">Package Name:</label>
                      <div class="col-md-8">
                          <input  class="form-control" type="text" name="PacName" placeholder="Enter Package Name." required maxlength="50">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-md-3 control-label">Duration:</label>
                      <div class="col-md-8">
                          <input  class="form-control" type="text" name="PacDuration" placeholder="Enter Package Duration." required maxlength="50">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-md-3 control-label">Hotel:</label>
                      <div class="col-md-8">
                          <input  class="form-control" type="text" name="PacHotel" placeholder="Enter Package Transport." required maxlength="1000">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-md-3 control-label">Transport:</label>
                      <div class="col-md-8">
                          <input  class="form-control" type="text" name="PacTrans" placeholder="Enter Package Transport." required maxlength="1000">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-md-3 control-label">Amount:</label>
                      <div class="col-md-8">
                          <input  class="form-control" type="text" name="PacAmount" placeholder="Enter Package Amount." required maxlength="15">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-md-3 control-label">Call:</label>
                      <div class="col-md-8">
                          <input  class="form-control" type="text" name="mobile" placeholder="Enter Mobile." required maxlength="15">
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="form-group col-md-3" >
                          <input type="file" name="fileToUpload" id="fileToUpload" class="file" accept="image/jpg, image/jpeg, image/png" required>
                      </div>

                      <div class="input-group col-sm-8">
                          <span class="input-group-addon" style="padding-right: 18px;"><i class="glyphicon glyphicon-picture"></i></span>
                          <input id="displayFileName" type="text" class="form-control" value="" readonly placeholder="Upload Image">
                          <span class="input-group-btn">
                              <button class="browse btn btn-primary" type="button"><i class="glyphicon glyphicon-folder-open"></i></button>
                          </span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-8">
                        <button class="btn btn-primary pull-right " type="submit" style="width: 140px;"> Save</button>
                      </div>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>



<!-- Add package model Section -->
<div class="modal fade modal-fullscreen  " id="deletePackage"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Admin(delete-package)</h4>
          </div>
          <div class="modal-body container-fluid">
            <div class="col-md-8 col-md-offset-2 well">
              <div class="input-group">
                <input type="text" class="form-control" id="packageName" name="code" placeholder="Enter Package Name...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button" id="search" name="search" >Go!</button>
                </span>
              </div>
            </div>
            <div class="col-md-4 col-md-offset-4" id="Content">
            <h1>Congrats</h1>
            </div>

          </div>
      </div>
  </div>
</div>






<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Developed By Md. Abu Musa (PGD 2016~17)</p>
</footer>

<script>
$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
   $(document).on('click', '.browse', function() {
      var file = $(this).parent().parent().parent().find('.file');
      file.trigger('click');
  });
  $(document).on('change', '.file', function() {
      $("#displayFileName").val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });

  $(document).on('click','#search',function(){
    alert("Congrats");
  });
});
</script>

</body>
</html>
