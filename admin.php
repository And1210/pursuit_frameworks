<?php
	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false || !isset($_SESSION["loggedin"])){
		header("location: login.php");
		exit;
	} else { //user is loggedin, check if admin
    if (isset($_SESSION["access_level"]) && $_SESSION["access_level"] == 0) {

    } else {
      echo "<script>alert(\"You do not have access to this page\"); window.location.href=\"index.php\";</script>";
    }
  }
?>

<html>

	<head>
		<title>Admin</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/sjcl.min.js"></script>

		<script src="assets/js/admin.js"></script>
	</head>

	<body>
    <div class="container">
      <div class="row" style="padding-bottom: 20px;">
        <div class="col-md-12">
          <h3>Admin Console</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h5>Register a User</h5>
          <iframe src="register.php" height=300 frameBorder="0" style="width: 100%;"></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h5>Update a User's Settings</h5>
          <iframe src="update.php" height=500 frameBorder="0" style="width: 100%;"></iframe>
        </div>
      </div>
    </div>
	</body>

</html>
