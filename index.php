<?php
	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false || !isset($_SESSION["loggedin"])){
		header("location: login.php");
		exit;
	}
?>

<html>

	<head>
		<title>Pursuit Inc.</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/sjcl.min.js"></script>

		<script src="assets/js/index.js"></script>
	</head>

	<body>
		<a href="/world_view.php">My World View</a>
		<a href="/lighthouse.php">Lighthouse</a>
		<a href="/purpose.php">Purpose</a>
		<a href="/me.php">Me</a>

		<br><br>

		<div id="test"></div>

		<?php
			if (isset($_SESSION["id"])) {
				echo $_SESSION["id"];
			}
		?>


	</body>

</html>
