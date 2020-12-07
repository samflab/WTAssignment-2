<?php
session_start();
$name;
$_SESSION['username'];
if(isset($_SESSION['username']))
{$name=$_SESSION['username'];

  $nm=$name;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notesflix</title>
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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
   <script src="js/javascript.js"></script>


<!--NAVBAR-->

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
        <li class="nav-item"><a class="nav-link" href="talk.php">Talk</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
        <li class="nav-item active"><a class="nav-link" href="contactus.php">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="modal" style="text-decoration: none;"data-target="#login">Login</a></li>
        <a href="signup.html"><button type="button" id="signup">Sign Up</button></a>

      </ul>
    </div>
  </div>
</nav>

<!--NAVBAR END-->
<!---------------------------------------------------------------------- LOGIN MODAL--------------------------------------------------------------->
<div class="modal fade" id="login" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST" name="login" onsubmit="return formValidationlogin();">
            <div class="form-group">
                  <label for="name">Email</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                  </div>

                   <div class="form-group">
                       <label for="password">Password <a style="float:right;">Forgot Password?</a></label>
                          <input type="password" class="form-control" id="password" name="password" required>

                  </div>
                  <button type="submit" id="login_button">Login</button>
          </form>
          <script src="js/login_validation.js"></script>
      </div>
    </div>

  </div>
</div>

<!----------------------------------------------------------------------LOGIN MODAL END---------------------------------------------------------->
    <div id="home_bg" style="background-image: url(img/home.svg);">
    <div id="desc_whole">
            <div class="col-lg-6 col-md-6 col-sm-6" id="desc">
                <p id="sign_up">We would love to hear from you!</p>
                <form method="POST" name="registration" onsubmit="return formValidationRegister();">
                    <div class="form-group">
                        <div id="line_one">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="namee" name="name" required>
                        </div>
                    <div id="line_one">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    </div>

                     <div class="form-group">
                     <label for="name">Message</label>
                     <textarea rows="10" style="width: 60%;"></textarea>
                    </div>
                    <input class="btn" type="submit" id="create" value="Send" href="#" >
                </form>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" id="illustration_one">
                <img src="img/Group 5945.svg" class="img-responsive" height="250" width="600">
            </div>
    </div>
    <script src="js/validation.js"></script>
    <div class="push"></div>
  </div>

    <footer class="footer">
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
                <li><a href="notes.php">Notes</a></li>
                <li><a href="live.php">Live</a></li>
                <li><a href="talk.php">Talk</a></li>
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



</body>
</html>
