<?php
	ini_set('session.gc_maxlifetime', 7200);
session_set_cookie_params(7200);
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
		<title>Update</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/sjcl.min.js"></script>

    <script src="assets/js/update.js"></script>
	</head>

  <body>
    <label for="get_user">Enter User's Current Email</label>
    <input type="text" name="get_user" id="get_user">
    <input type="button" id="get_data" value="Get Data"><br><br>

    <i><p>Leave blank to not change</p></i>
    <label for="fname">First Name: </label>
    <input type="text" name="fname" id="fname"><br>
    <label for="lname">Last Name: </label>
    <input type="text" name="lname" id="lname"><br>
    <label for="email">Email: </label>
    <input type="text" name="email" id="email"><br>
    <label for="password">Update Password: </label>
    <input name="password" id="password"><br>

    <input type="button" id="update" value="Update">
		<input type="button" id="delete" value="Delete">

    <br><br>
    <i><div id="result"></div></i>
  </body>

</html>
