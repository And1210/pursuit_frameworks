<?php
	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false || !isset($_SESSION["loggedin"])){
		header("location: login.php");
		exit;
	}
?>

<html>

	<head>
		<title>My Meaningful Experiences</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>

		<script src="assets/js/me.js"></script>
	</head>

	<body>
		<h3 align="center" class="title"><b>My Meaningful Experiences</b></h3>

		<div class="container">
			<hr class="title-line">

			<div class="row">
				<div class="col-md-4 d-flex flex-column">
					<div class="encase encase-blue breathe-right" style="padding: 10px;">
						<label class="subtitle" align="left"><b>1</b> Title: </label>
						<input type="text" class="title-border" id="title1">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="Description" id="description1"></textarea>
						</div>
						<label class="subtitle" align="left">Meaningfulness: </label>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To You..." id="meaningfulness_you1"></textarea>
						</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To Others..." id="meaningfulness_other1"></textarea>
						</div>
						<label class="subtitle" align="left">Impact: </label>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To You..." id="impact_you1"></textarea>
						</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To Others..." id="impact_other1"></textarea>
						</div>
					</div>
				</div>

				<div class="col-md-4 d-flex flex-column">
					<div class="encase encase-blue breathe-right" style="padding: 10px;">
						<label class="subtitle" align="left"><b>2</b> Title: </label>
						<input type="text" class="title-border" id="title2">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="Description"id="description2"></textarea>
						</div>
						<label class="subtitle" align="left">Meaningfulness: </label>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To You..." id="meaningfulness_you2"></textarea>
						</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To Others..." id="meaningfulness_other2"></textarea>
						</div>
						<label class="subtitle" align="left">Impact: </label>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To You..." id="impact_you2"></textarea>
						</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To Others..." id="impact_other2"></textarea>
						</div>
					</div>
				</div>

				<div class="col-md-4 d-flex flex-column">
					<div class="encase encase-blue breathe-right" style="padding: 10px;">
						<label class="subtitle" align="left"><b>3</b> Title: </label>
						<input type="text" class="title-border" id="title3">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="Description" id="description3"></textarea>
						</div>
						<label class="subtitle" align="left">Meaningfulness: </label>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To You..." id="meaningfulness_you3"></textarea>
						</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To Others..." id="meaningfulness_other3"></textarea>
						</div>
						<label class="subtitle" align="left">Impact: </label>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To You..." id="impact_you3"></textarea>
						</div>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" placeholder="To Others..." id="impact_other3"></textarea>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 d-flex flex-column encase-round encase-blue">
					<div class="form-group flex-grow-1 d-flex flex-column" style="padding-left: 25px; padding-right: 25px;">
						<textarea class="form-control flex-grow-1	no-border" placeholder="What these were fundamentally about..." id="fundamental"></textarea>
					</div>
				</div>
			</div>
		</div>
	</body>

	<footer>
		<div class="container">
			<hr class="footer-line">
			<div class="row">
				<div class="col-sm-2">
					<img src="assets/img/logo.png" height=40>
				</div>
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<p class="copyright"><br>Copyright &copy; 2007-2020 Pursuit
						Development Labs Inc. All Rights Reserved.</p>
				</div>
				<br>
				<br>
			</div>
		</div>
	</footer>

</html>
