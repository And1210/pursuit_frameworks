<?php
  session_start();

  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      header("location: logout.php");
      exit;
  }

  // foreach ($_POST as $t) {
  //   echo $t;
  // }
  // if (isset($_POST["name"])) {
  //   echo $_POST["name"];
  // }

?>

<html>

	<head>
		<title>Pursuit Inc.</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/sjcl.min.js"></script>

    <script src="assets/js/login.js"></script>
	</head>

	<body>

    <div class="container" style="padding-bottom: 10px;"><div class="row"><div class="col-md-12"><a style="text-decoration: none; color: red; font-size: 25pt;" href="http://www.pursuitleadership.com">PursuitLeadership.com</a></div></div></div>
    <div class="container encase" style="margin-bottom: 0px !important;">
      <div class="row">
        <div class="col-md-4" style="padding-top: 30px; padding-bottom: 0px; padding-left: 40px; padding-right: 20px;">
          <h4 class="title" style="padding-bottom: 10px;">Login</h4>
          <label for="email" class="subtitle" style="color: red;">Email: </label>
          <input type="text" name="email" id="email" style="margin-left: 41px;"><br>
          <label for="password" class="subtitle" style="color: red;">Password: </label>
          <input type="password" name="password" id="password" style="margin-left: 15px;"><br>
          <!-- <div id="test"></div> -->
        </div>
        <div class="col-md-8" style="padding: 10px; padding-top: 30px;">
          <p style="font-size: 10pt;">Welcome to the Pursuit Leadership Portal.<br><br>
            <i>The intention of this site is for your Pursuit Guide to facilitate you in uncovering your authentic leadership through these 100% original frameworks and tools. Upon completion, we recommend that that your personal materials are removed and not remain on this site for an extended period of time.</i>
          </p>
        </div>
      </div>
      <div class="row" style="padding-bottom: 20px;">
        <div class="col-md-12" align="center">
          <input type="button" style="background-color: lightgrey; border-radius: 5px; padding: 5px 15px;"  id="login" value="Login">
        </div>
      </div>
    </div>
    <div class="container" style="padding-bottom: 10px;"><div class="row"><div class="col-md-12"><p class="copyright">Copyright © 2020 Pursuit Development Labs Inc. All Rights Reserved.</p></div></div></div>
  </body>

</html>
