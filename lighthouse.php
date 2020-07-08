<?php
	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false || !isset($_SESSION["loggedin"])){
		header("location: login.php");
		exit;
	}

	if(isset($_GET["id"])) {
		if (isset($_SESSION["access_level"]) && $_SESSION["access_level"] == 0) {
			$_SESSION["selected_id"] = $_GET["id"];
		} else {
			if (isset($_SESSION["id"])) {
				if ($_GET["id"] !== $_SESSION["id"]) {
					unset($_SESSION["selected_id"]);
		      echo "<script>alert(\"You do not have access to this page\"); window.location.href=\"index.php\";</script>";
				}
			} else {
				unset($_SESSION["selected_id"]);
	      echo "<script>alert(\"You do not have access to this page\"); window.location.href=\"index.php\";</script>";
			}
		}
	} else {
		unset($_SESSION["selected_id"]);
	}
?>

<html>

	<head>
		<title>Lighthouse</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/jspdf.min.js"></script>
		<script src="assets/js/html2canvas.min.js"></script>

		<script src="assets/js/pdf_save.js"></script>
		<script src="assets/js/lighthouse.js"></script>
	</head>

	<body>
		<header class="header-area header-sticky" id="header">
			<div class="">
				<div class="">
					<div class="">
						<nav class="main-nav">
							<!-- ***** Logo Start ***** -->
							<a href="/index.php" class="logo">
								<img src="assets/img/PursuitLeadership.png" class="logo-img" />
							</a>
							<!-- ***** Logo End ***** -->
							<!-- ***** Menu Start ***** -->
							<ul class="nav">
								<li><a href="./index.php" class="active text-page-tab">Home</a></li>
								<li class="dropdown text-page-tab">
									<a class="dropbtn text-page-tab">Frameworks</a>
									<div class="dropdown-content">
										<a href="./me.php" class="text-page-tab" style="font-size: 12pt !important;">My Meaningful Experiences</a>
										<a href="./purpose.php" class="text-page-tab" style="font-size: 12pt !important;">My Purpose</a>
										<a href="./world_view.php" class="text-page-tab" style="font-size: 12pt !important;">My World View</a>
										<a href="./lighthouse.php" class="text-page-tab" style="font-size: 12pt !important;">My Proactive Stand</a>
										<a href="./authority.php" class="text-page-tab" style="font-size: 12pt !important;">My Relationship to Authority</a>
										<a href="./authentic_role.php" class="text-page-tab" style="font-size: 12pt !important;">My Authentic True Role</a>
										<a href="./natural_approach.php" class="text-page-tab" style="font-size: 12pt !important;">My Natural Approach</a>
									</div>
								</li>
								<li><a href="./login.php" class="text-page-tab"><b>Logout</b></a></li>
							</ul>
							<!-- ***** Menu End ***** -->
						</nav>
					</div>
				</div>
			</div>
		</header>

		<div class="body_content" id="to_download">
			<h3 align="center" class="title"><b>My Proactive Stand In The World</b></h3>

			<div class="container" align="center">
				<hr class="title-line">

				<div class="row">

				</div>

				<div class="row">
					<div class="col-md-4">
						<div>
							<div class="subtitle">Impact On Others</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	yellow medium-input" id="impact_others"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex flex-column">
						<div>
							<div class="subtitle"><b>Potential - Possibility I Stand For</b></div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	blue medium-input" id="potential"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<div class="subtitle">Effect On Me</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	yellow medium-input" id="effect_me"></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 d-flex flex-column">
						<div>
							<div class="subtitle">Space:</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	blue medium-input" id="space"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 d-flex flex-column">
						<div style="position: relative; width: 120%; left: -10%;">
							<div class="subtitle">Show-Up:</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	light-blue medium-input" id="show_up"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 d-flex flex-column">
						<div style="position: relative; width: 140%; left: -20%;">
							<div class="subtitle">My Contribution:</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	green medium-input" id="contribution"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 d-flex flex-column">
						<div style="position: relative; width: 160%; left: -30%;">
							<div class="subtitle">Meaningful To Me Because (Impact I Desire):</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	purple medium-input" id="meaningful_me"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 d-flex flex-column">
						<div style="position: relative; width: 180%; left: -40%;">
							<div class="subtitle">Meaningful Experience:</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	orange medium-input" id="meaningful_experience"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>

				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8 d-flex flex-column">
						<div style="position: relative; "><!--width: 180%; left: -40%;">-->
							<div class="subtitle">Handle:</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	page-tab small-input" id="handle"></textarea>
								<!-- <input type="text" id="handle"></input> -->
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>

				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8 d-flex flex-column">
						<div style="position: relative; width: 120%; left: -10%;"><!--width: 180%; left: -40%;">-->
							<div class="subtitle">My Choice:</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	blue small-input" id="my_choice"></textarea>
								<!-- <input type="text" id="my_choice"></input> -->
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>

				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8 d-flex flex-column">
						<div style="position: relative; width: 130%; left: -15%;"><!--width: 180%; left: -40%;">-->
							<div class="subtitle">What I Truly Want:</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	grey small-input" id="truly_want"></textarea>
								<!-- <input type="text" id="truly_want"></input> -->
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>

				<div class="row">
					<div class="col-md-6" align="right">
						<a class="save-link" href="javascript:save()">Save</a>
					</div>
					<div class="col-md-6" align="left">
						<a class="save-link" href="javascript:save_pdf()">Print</a>
					</div>
				</div>
			</div>
		</div>
	</body>

	<footer>
		<div class="container body_content">
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
