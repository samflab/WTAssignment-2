<?php
session_start();
$name;
$_SESSION['username'];
if(isset($_SESSION['username']))
{$name=$_SESSION['username'];

  $nm=$name;
}

?>



<html>
    <head>
    <title>Live</title>
  <link rel = "icon" href ="img/N-Logo%20(1).svg" type = "image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/talk.css">
    <link rel="stylesheet" href="css/notes.css">
    <link rel="stylesheet" href="css/live.css">
    <style>
        #podcasts
        {
            background-color: #266AB4;
            color: white;
            border: none;
            padding: 9px 30px;
            text-align: center;
            text-decoration: none;
            box-shadow: 0px 4px 6px #00000029;
            border-radius: 5px;
            opacity: 1;
            display: inline-block;
            margin-top: 1%;
            font-family: 'Lato';
            font-size: 20px;
        }

        #podcasts-section
        {
            text-align: center;
            padding-top: 5%;
            padding-bottom: 5%;
        }
    </style>
    </head>
    <body>

<!-------------------------------------------------------NAVBAR------------------------------------------------------------------------------->
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="navbar-header">

      <a class="navbar-brand" href="home.php"><img src="img/logo.png" height="30" width="100"></a>
        <button type="button" class="navbar-toggle ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a class="nav-link" href="notes.php">Notes</a></li>
        <li class="nav-item"><a class="nav-link" href="live.php">Live</a></li>
        <li class="nav-item active"><a class="nav-link" href="talk.php">Talk</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>


              <?php
              if($nm!="")
            {echo'  <li class="nav-item"><a class="nav-link" style="color:#266AB4; font-weight: 700;">Hi, '.$nm.'</a></li>';
                    echo'   <a href="logout.php"><button type="button" id="signup">Logout</button></a>';
                   }
                      else {
                        echo'  <li class="nav-item"><a class="nav-link" data-toggle="modal" style="text-decoration: none;"data-target="#login">Login</a></li>';
                        echo'          <a href="signup.html"><button type="button" id="signup">Sign Up</button></a>';
                      }

               ?>

      </ul>
    </div>
  </div>
</nav>
<!-----------------------------------------------------------------------NAVBAR END---------------------------------------------------------------->

<!---------------------------------------------------------------------- LOGIN MODAL--------------------------------------------------------------->
    <div class="modal fade" id="login" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <form method="POST" name="login" onsubmit="return formValidationlogin();">
              <div class="form-group">
                    <label for="name">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                     <div class="form-group">
                         <label for="password">Password <a style="float:right;">Forgot Password?</a></label>
                            <input type="password" class="form-control" id="password" name="password">

                    </div>
                    <button type="button" id="login_button">Login</button>
            </form>
        </div>
      </div>

    </div>
  </div>

<!----------------------------------------------------------------------LOGIN MODAL END---------------------------------------------------------------->

<!----------------------------------------------------------------------HEADER------------------------------------------------------------------------->
    <div id="home_bg" style="background-image: url(img/live_bg.svg);">
    <div id="desc_whole">
            <div class="col-lg-5 col-md-5 col-sm-5" id="desc">
                <p id="heading"><span class="half-highlight"><b>T</b>ALK</span></p>
                <p id="about">Explore detailed notes and study materials from different institutions. <br>Access various learning content on university syllabi and coaching materials gathered from renowned universities across India for free!</div>
            <div class="col-lg-6 col-md-6 col-sm-6" id="illustration_one">
                <img src="img/Group%205921.svg" class="img-responsive" height="300" width="600" style="float: right; padding-left: 5%;">
            </div>

    </div>
     <img src="img/wavelala.svg" class="img-responsive">
  </div>
<!------------------------------------------------------------------- HEADER END------------------------------------------------------------------->
<!--------------------------------------------------------------------RADIO------------------------------------------------------------------->
    <div id="speaker-bg" style="background-image: url(img/notes_bg.svg);">
        <div class="container">
            <iframe id="player" frameborder='0' seamless src='//www.caster.fm/widgets/em_player.php?jsinit=true&uid=522728&t=color&c=FFFFFF&embed=true'></iframe>
            <style>
                iframe
                {
                    width:100%;
                    margin-top: 5%;
                    height: 23%;
                }
            </style>
            <br>
            <br>
            <br>
            <div class="col-lg-2 col-md-2 col-sm-2"><img src="img/Neeraj.png" height="100" width="100"></div>
            <div class="col-lg-10" style="padding-top: 2%;">
                <p id="speaker-intro">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                </p>
            </div>
            <br>

        </div>
        <!--COMMENTS-->
        <br>
        <br>
        <br>
        <style>
            #comments{
                font-size: 21px;
                font-weight: 600;
            }
        </style>
        <div class="container">
            <div>
            <p id="comments">Comments</p>
            <textarea rows="10"></textarea>
            <style>
                textarea
                {
                    width:100%;
                }
            </style>
            </div>
            <br>
            <br>
            <div class="col-lg-3 col-md-2 col-sm-1">
                <p id="comments">Name</p><input type="text" id="names" name="name">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-1 embed-submit-field">
                <p id="comments">Message</p>
                <input type="text" id="message"/>
                <button type="submit" id="send" style="position: absolute; 
                                                        right: 30px;
                                                        background-color:transparent;
                                                        border: none;
                                                        margin-top: 5px; ">
                    <img src="img/send-24px.svg" height="25" width="25">
                </button>
            </div>
            </div>
            <br>
            <br>
    </div>
<!--------------------------------------------------------------------RADIO END---------------------------------------------------------------->

<!------------------------------------------------------------------------GUESTS------------------------------------------------------------------->
<div style="padding-top: 5%; padding-left: 5.7%; padding-right: 5.7%;">
        <h3>Season 1 Guests</h3>
        <hr>
        <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-3" id="notes-name">
            <div style="display:inline-block;">
          <img src="img/Neeraj.png" height="70" width="70">
          <h4 style="float: right; padding-top: 10%; margin-left: 20px;">Neeraj Sharma</h4>
          </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 btn btn-primary" id="download"><a href="https://www.linkedin.com/in/neerajsha/"><i class="fab fa-linkedin-in" style="font-size: 30px;"></i></a></div>
        </div>

        <hr>
        <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-3" id="notes-name">
         <div style="display:inline-block;">
          <img src="img/Sagar.png" height="70" width="70">
          <h4 style="float: right; padding-top: 10%; margin-left: 20px;">Sagar Chaudhuri</h4>
          </div>
        </div>
            <div class="col-lg-1 col-md-1 col-sm-1 btn btn-primary" id="download"><a href="https://www.linkedin.com/in/neerajsha/"><i class="fab fa-linkedin-in" style="font-size: 30px;"></i></a></div>
        </div>

    <hr>
        <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-3" id="notes-name">
         <div style="display:inline-block;">
          <img src="img/Neil.png" height="70" width="70">
          <h4 style="float: right; padding-top: 10%; margin-left: 20px;">Nilendu Banerjee</h4>
          </div>
        </div>
            <div class="col-lg-1 col-md-1 col-sm-1 btn btn-primary" id="download"><a href="https://www.linkedin.com/in/neerajsha/"><i class="fab fa-linkedin-in" style="font-size: 30px;"></i></a></div>
        </div>

    <hr>
        <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-3" id="notes-name">
         <div style="display:inline-block;">
          <img src="img/Divyani.png" height="70" width="70">
          <h4 style="float: right; padding-top: 10%; margin-left: 20px;">Divyani Gandhi</h4>
          </div>
        </div>
            <div class="col-lg-1 col-md-1 col-sm-1 btn btn-primary" id="download"><a href="https://www.linkedin.com/in/neerajsha/"><i class="fab fa-linkedin-in" style="font-size: 30px;"></i></a></div>
        </div>

    <hr>
        <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-3" id="notes-name">
         <div style="display:inline-block;">
          <img src="img/Zack.png" height="70" width="70">
          <h4 style="float: right; padding-top: 10%; margin-left: 20px;">Zack Ballinger</h4>
          </div>
        </div>
            <div class="col-lg-1 col-md-1 col-sm-1 btn btn-primary" id="download"><a href="https://www.linkedin.com/in/neerajsha/"><i class="fab fa-linkedin-in" style="font-size: 30px;"></i></a></div>
        </div>
    <hr>
    <br>
    <br>
    <br>

  </div>
<!-----------------------------------------------------------------GUESTS END------------------------------------------------------------------->
 <!----------------------------------------------------------------PODCAST---------------------------------------------------------------------->
<div style="background-image: url(img/notes_bg.svg);">
    <div id="podcasts-section">
        <h3>Our Podcasts</h3>

       <a href="https://podcasts.google.com/feed/aHR0cHM6Ly9hbmNob3IuZm0vcy8yYTIxOWRmOC9wb2RjYXN0L3Jzcw?sa=X&ved=2ahUKEwjVwpSqs-jsAhXIELcAHWc9B-kQ9sEGegQIARAC"> <button type="button" id="podcasts"><i class="fab fa-google"></i>  Google Podcast</button></a>
        <a href="https://podcasts.apple.com/in/podcast/a-day-with/id1522294671"><button type="button" id="podcasts"><i class="fab fa-apple"></i>  Apple Podcast</button></a>
       <a href="https://open.spotify.com/show/61m6SHP3terfYI5NvnNfuw"> <button type="button" id="podcasts"><i class="fab fa-spotify"></i>  Spotify</button></a>
    </div>
</div>
<!----------------------------------------------------------------PODCAST END------------------------------------------------------------------->
    <!--FOOTER-->
    <footer>
      <section class="ft-main">
          <div class="ft-main-item" id="first">
              <h2 class="ft-title">Company</h2>
              <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              </ul>
          </div>
          <div class="ft-main-item">
              <h2 class="ft-title">Product</h2>
              <ul>
              <li><a href="notes.html">Notes</a></li>
              <li><a href="live.html">Live</a></li>
              <li><a href="talk.html">Talk</a></li>
              <li><a href="#">Publish</a></li>
              </ul>
          </div>
          <div class="ft-social">
              <h2 class="ft-title" style="font-size: 3.5rem;">Follow  us  on</h2>
              <ul class="ft-social-list" style="width:250px">
               <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
               <li><a href="#"><i class="fab fa-instagram"></i></a></li>
               <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              </ul>
          </div>
      </section>
  </footer>
<!--FOOTER END-->
</body>
</html>
