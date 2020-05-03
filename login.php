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

    <label for="email">Email: </label>
    <input type="text" name="email" id="email"><br>
    <label for="password">Password: </label>
    <input type="password" name="password" id="password"><br>

    <input type="button" id="login" value="Login">

    <br><br>
    <div id="test"></div>
  </body>

</html>
