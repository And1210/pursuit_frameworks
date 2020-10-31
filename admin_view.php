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
		<title>View</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/sjcl.min.js"></script>

    <script src="assets/js/admin_view.js"></script>
	</head>

  <body>
    <label for="get_user">Enter User's Email</label>
    <input type="text" name="get_user" id="get_user">
    <input type="button" id="get_data" value="Get Data"><br><br>

		<input type="button" id="me" value="Meaningful Experiences">
    <input type="button" id="purpose" value="Purpose">
    <input type="button" id="world_view" value="World View">
    <input type="button" id="lighthouse" value="Proactive Stand">
    <input type="button" id="authority" value="Relationship To Authority">
    <input type="button" id="authentic_role" value="Authentic Role">
    <input type="button" id="natural_approach" value="Natural Approach">

    <br><br>
    <i><div id="result"></div></i>
  </body>

</html>
