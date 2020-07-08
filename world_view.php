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
		<title>My World View</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/jspdf.min.js"></script>
		<script src="assets/js/html2canvas.min.js"></script>

		<script src="assets/js/pdf_save.js"></script>
		<script src="assets/js/world_view.js"></script>
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
			<h3 align="center" class="title"><b>My World View</b></h3>

			<div class="container">
				<hr class="title-line">

				<!-- Title Row 1 -->
				<div class="row" align="center">
					<div class="col-md-6">
						<h6 class="text-burnt-red">(-) Burns Energy</h6>
					</div>
					<div class="col-md-6">
						<h6 class="text-blue">(+) Builds Energy</h6>
					</div>
				</div>
				<div class="row" align="center">
					<div class="col-md-2">
						<h6 class="subtitle">Feel</h6>
					</div>
					<div class="col-md-8">
						<h6 class="subtitle">The Big World</h6>
					</div>
					<div class="col-md-2">
						<h6 class="subtitle">Feel</h6>
					</div>
				</div>

				<!-- Textarea Row 1 -->
				<div class="row">
					<div class="col-md-2 d-flex flex-column">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	burnt-red" id="feel_neg"></textarea>
						</div>
					</div>

					<!-- Textarea Row 1a -->
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	purple" id="big_world_neg"></textarea>
								</div>
							</div>
							<div class="col-md-6 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	purple" id="big_world_pos"></textarea>
								</div>
							</div>
						</div>

						<h6 align="center" class="subtitle">My World - Communities</h6> <!-- Title Row 1a -->
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-11 d-flex flex-column">
										<div class="form-group flex-grow-1 d-flex flex-column">
											<textarea class="form-control flex-grow-1	blue" id="world_communities_neg"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-11 d-flex flex-column">
										<div class="form-group flex-grow-1 d-flex flex-column">
											<textarea class="form-control flex-grow-1	blue" id="world_communities_pos"></textarea>
										</div>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-2 d-flex flex-column">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	blue" id="feel_pos"></textarea>
						</div>
					</div>
				</div>

				<!-- Title Row 2 -->
				<div class="row" align="center">
					<div class="col-md-2">
						<h6 class="subtitle">React</h6>
					</div>
					<div class="col-md-8">
						<h6 class="subtitle">My Work World</h6>
					</div>
					<div class="col-md-2">
						<h6 class="subtitle">Respond</h6>
					</div>
				</div>

				<!-- Textarea Row 2 -->
				<div class="row">
					<div class="col-md-2 d-flex flex-column">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea style="width: 135%;" class="form-control flex-grow-1 burnt-red" id="react_neg"></textarea>
						</div>
					</div>

					<div class="col-md-8">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	green" id="work_world_neg"></textarea>
								</div>
							</div>
							<div class="col-md-5 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	green" id="work_world_pos"></textarea>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
					</div>

					<div class="col-md-2 d-flex flex-column">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea style="width: 135%; position: relative; left: -35%;" class="form-control flex-grow-1 blue" id="respond_pos"></textarea>
						</div>
					</div>
				</div>

				<!-- Title Row 3 -->
				<div class="row" align="center">
					<div class="col-md-2">
						<h6 class="subtitle">Impact</h6>
					</div>
					<div class="col-md-8">
						<h6 class="subtitle">My Personal World</h6>
					</div>
					<div class="col-md-2">
						<h6 class="subtitle">Impact</h6>
					</div>
				</div>

				<!-- Textarea Row 3 -->
				<div class="row">
					<div class="col-md-3 d-flex flex-column">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	burnt-red" id="impact_neg">Me: &#13;&#10;Others: &#13;&#10;World: </textarea>
						</div>
					</div>

					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	orange" id="personal_world_neg"></textarea>
								</div>
							</div>
							<div class="col-md-6 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	orange" id="personal_world_pos"></textarea>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 d-flex flex-column">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	blue" id="impact_pos">Me: &#13;&#10;Others: &#13;&#10;World: </textarea>
						</div>
					</div>
				</div>

				<!-- Title Row 4 -->
				<div class="row" align="center">
					<div class="col-md-1"></div>
					<div class="col-md-4">
						<h6 class="subtitle">Position</h6>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<h6 class="subtitle">Position</h6>
					</div>
					<div class="col-md-1"></div>
				</div>

				<!-- Textarea Row 4 -->
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-4 d-flex flex-column">
						<input type="text" class="burnt-red" id="position_neg">
					</div>
					<div class="col-md-2" align="center">
						<img src="assets/img/globe.png" height=50>
					</div>
					<div class="col-md-4 d-flex flex-column">
						<input type="text" class="blue" id="position_pos">
					</div>
					<div class="col-md-1"></div>
				</div>

				<div class="row" style="padding-top: 20px;">
					<div class="col-md-3"></div>
					<div class="col-md-6 d-flex flex-column">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1 small-input	grey" id="thoughts"></textarea>
						</div>
					</div>
					<div class="col-md-3"></div>
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
				<div class="col-md-2">
					<img src="assets/img/logo.png" height=40>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<p class="copyright"><br>Copyright &copy; 2007-2020 Pursuit
						Development Labs Inc. All Rights Reserved.</p>
				</div>
				<br><br>
			</div>
		</div>
	</footer>
</html>
