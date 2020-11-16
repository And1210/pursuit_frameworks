<?php
	ini_set('session.cookie_lifetime', 31536000);
	ini_set('session.gc_maxlifetime', 31536000);
	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false || !isset($_SESSION["loggedin"])){
		header("location: login.php");
		exit;
	}

  print_r(ini_get("session.cookie_lifetime"));
  echo("<br>");
  print_r(ini_get("session.gc_maxlifetime"));
?>
