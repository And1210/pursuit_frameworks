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
		<title>My Essential Purpose</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/jspdf.min.js"></script>
		<script src="assets/js/html2canvas.min.js"></script>

		<script src="assets/js/pdf_save.js"></script>
		<script src="assets/js/purpose.js"></script>
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
			<h3 align="center" class="title"><b>My Essential Purpose</b></h3>

			<div class="container">
				<hr class="title-line">

				<!-- Row 1 -->
				<div class="row encase encase-blue" style="min-height: 250px;" align="center">
					<div class="col-md-3 d-flex flex-column">
						<h6 class="subtitle purpose-page"><b>Hope</b></h6>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	light-blue" id="hope"></textarea>
						</div>
					</div>
					<div class="col-md-3 d-flex flex-column">
						<h6 class="subtitle purpose-page"><b>Doings</b></h6>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	orange" id="doings"></textarea>
						</div>
					</div>
					<div class="col-md-3 d-flex flex-column">
						<h6 class="subtitle purpose-page"><b>Creations</b></h6>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1 orange" id="creations"></textarea>
						</div>
					</div>
					<div class="col-md-3 d-flex flex-column">
						<h6 class="subtitle purpose-page" align="center"><b>Intentions</b></h6>
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	green" id="intentions"></textarea>
						</div>
					</div>
				</div>

				<!-- Row 2 -->
				<div class="row" align="center">
					<div class="col-md-6 d-flex flex-column">
						<div class="encase encase-blue breathe-right" style="padding: 10px;">
							<h6 class="subtitle purpose-page"><b>Purpose Statment Draft #1</b></h6>
							<div class="subtitle" align="left">I exist to...</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1 green" placeholder="What? [Intent]" id="exist_to"></textarea>
							</div>
							<div class="subtitle" align="left">That results in...</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1 light-blue" placeholder="What? [Hope]" id="results_in"></textarea>
							</div>
							<div class="subtitle" align="left">For myself & others...</div>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1 orange" placeholder="By Doing & Creating What?" id="myself_others"></textarea>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="encase-round encase-purple breathe-left">
							<h6 class="subtitle purpose-page"><b>My Purpose Statement</b> (Working Draft)</h6>
							<div class="form-group flex-grow-1 d-flex flex-column" style="padding-left: 15px; padding-right: 15px;">
								<textarea class="form-control flex-grow-1	no-border large-input" id="purpose_statement"></textarea>
							</div>
						</div>
						<h6 class="subtitle purpose-page"><b>Purpose Statment Handle</b></h6>
						<input type="text" class="input purple" style="width: 75%;" id="handle">
					</div>
				</div>

				<div class="row" data-html2canvas-ignore="true">
					<div class="col-md-6" align="right">
						<a class="save-link" href="javascript:save()">Save</a>
					</div>
					<div class="col-md-6" align="left">
						<a class="save-link" href="javascript:save_pdf()">Print</a>
					</div>
				</div>

				<div class="row" style="padding-top: 5px;">
					<div class="col-md-12" align="right">
						<div style="font-size: 10pt;" id="datetime"></div>
					</div>
				</div>

				<div class="logoCopyrightClone">
				</div>
			</div>
		</div>
	</body>

	<footer>
		<div class="container body_content logoAndCopyright">
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
