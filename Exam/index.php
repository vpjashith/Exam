<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Seek - Q </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value;
      var letters = /^[A-Za-z]+$/;
      if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
      }
      var z = document.forms["form"]["college"].value;
      if (z == null || z == "") {
        alert("college must be filled out.");
        return false;
      }
      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address.");
        return false;
      }
      var a = document.forms["form"]["password"].value;
      if (a == null || a == "") {
        alert("Password must be filled out");
        return false;
      }
      if (a.length < 5 || a.length > 25) {
        alert("Passwords must be 5 to 25 characters long.");
        return false;
      }
      var b = document.forms["form"]["cpassword"].value;
      if (a != b) {
        alert("Passwords must match.");
        return false;
      }
    }
  </script>
  <link rel="stylesheet" href="css/home.css" />
  <link rel="shortcut icon" type="image/png" href="image/subject-icon-12.jpg" />
  <link rel="stylesheet" href="css/box_design.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
  <div class="navi" style="z-index: 1;">
    <div class="logo" style=" margin:5px; margin-top:3px;">
      <img class="img1" src="image/subject-icon-12.jpg" alt="logo" width="40px" height="40px" />
      <div style="display: inline-block;">Seek - Q</div>
    </div>
    <nav>
      <a href="index.php">Sign up</a>

      <a href="#" data-toggle="modal" data-target="#login" style="color:white;">Admin Login</a>
      <a href="feedback.php">Feedback</a>
      <a href="./html/contact.html">Contact</a>
      <div class="animation start-home"></div>
    </nav>
    <div class="col-md-2 col-md-offset-4" style="position: absolute; margin-left:82% ">
      <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal" style="padding:0px;line-height: 13px;padding-top:5px; margin: 14px ;margin-right: 0px;; background: white;"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
    <!--sign in modal start-->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content title1">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title title1"><span style="style= olor:#39424e;font-family:'typo'">Log In</span></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="login.php?q=index.php" method="POST">
              <fieldset>


                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email"></label>
                  <div class="col-md-6">
                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

                  </div>
                </div>


                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="password"></label>
                  <div class="col-md-6">
                    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

                  </div>
                </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Log in</button>
            </fieldset>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div>




  <!--sign in modal closed-->


  <!--header row closed-->


  <div class="bg1" style="background: white;height:555px">
    <ul class="bg-bubbles" style="overflow: hidden;height:555px;">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <div class="row">

      <div class="col-md-7"></div>
      <div class="col-md-4 panel" style="width:380px;transition: width 2s; margin-left:calc(50% - 190px);">
        <!-- sign in form begins -->
        <form id="form" class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
          <fieldset>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="ktu"></label>
              <div class="col-md-12">
                <input id="ktu" name="ktu" placeholder="Enter your KTU ID" class="form-control input-md" type="text">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label title1" for="email"></label>
              <div class="col-md-12">
                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="password"></label>
              <div class="col-md-12">
                <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">

              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12control-label" for="cpassword"></label>
              <div class="col-md-12">
                <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">

              </div>
            </div>
            <?php if (@$_GET['q7']) {
              echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
            } ?>
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-12 control-label" for=""></label>
              <div class="col-md-12">
                <input type="submit" value="Sign up" class="btn btn-primary" style="background: #39424e; margin-left:49px;" />
              </div>
            </div>

          </fieldset>
        </form>
      </div>
      <!--col-md-6 end-->
    </div>
  </div>
  </div>
  <!--container end-->




  <!--Modal for admin login-->
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><span style="color:#39424e;font-family:'typo' ">Admin Login</span></h4>
        </div>
        <div class="modal-body title1">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <form role="form" method="post" action="admin.php?q=index.php">
                <div class="form-group">
                  <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" />
                </div>
                <div class="form-group">
                  <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
                </div>
                <div class="form-group" align="center">
                  <input type="submit" name="login" value="Login" class="btn btn-primary" />
                </div>
              </form>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
        <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--footer end-->

  </div>

</body>

</html>