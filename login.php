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

    <div class="container encase">
      <div class="row">
        <div class="col-md-12" style="padding-top: 30px; padding-bottom: 0px; padding-left: 40px; padding-right: 20px;">
          <h4 class="title" style="padding-bottom: 10px;">Login</h4>
          <label for="email" class="subtitle" style="color: red;">Email: </label>
          <input type="text" name="email" id="email" style="margin-left: 41px;"><br>
          <label for="password" class="subtitle" style="color: red;">Password: </label>
          <input type="password" name="password" id="password" style="margin-left: 15px;"><br>
          <div id="test"></div>
        </div>
      </div>
      <div class="row" style="padding-bottom: 20px;">
        <div class="col-md-12" align="center">
          <input type="button" style="background-color: lightgrey; border-radius: 5px; margin-top: 20px; padding: 5px 15px;"  id="login" value="Login">
        </div>
      </div>
    </div>
  </body>

</html>
