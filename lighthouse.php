<?php
	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false || !isset($_SESSION["loggedin"])){
		header("location: login.php");
		exit;
	}
?>

<html>

	<head>
		<title>Lighthouse</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
	</head>

	<body>
		<h3 align="center" class="title"><b>My Proactive Stand In The World</b></h3>

		<div class="container" align="center">
			<hr class="title-line">

			<div class="row">

			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 d-flex flex-column">
					<div>
						<div class="title">Space:</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 d-flex flex-column">
					<div style="position: relative; width: 120%; left: -10%;">
						<div class="title">Show-Up:</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 d-flex flex-column">
					<div style="position: relative; width: 140%; left: -20%;">
						<div class="title">My Contribution:</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 d-flex flex-column">
					<div style="position: relative; width: 160%; left: -30%;">
						<div class="title">Meaningful To Me Because (Impact I Desire):</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 d-flex flex-column">
					<div style="position: relative; width: 180%; left: -40%;">
						<div class="title">Meaningful Experience:</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</body>

</html>
