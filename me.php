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
		<title>My Meaningful Experiences</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/jspdf.min.js"></script>
		<script src="assets/js/html2canvas.min.js"></script>

		<script src="assets/js/pdf_save.js"></script>
		<script src="assets/js/me.js"></script>
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
			<h3 align="center" class="title"><b>My Meaningful Experiences</b></h3>

			<div class="container">
				<hr class="title-line">

				<div class="row">
					<div class="col-md-4 d-flex flex-column">
						<div class="encase encase-blue breathe-right" style="padding: 10px;">
							<label class="subtitle" align="left"><b>1</b> Title: </label>
							<input type="text" class="title-border input" id="title1">
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black orange" placeholder="Description" id="description1"></textarea>
							</div>
							<label class="subtitle" align="left">Meaningfulness: </label>
							<p class="hint"><i>To You...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black green" placeholder="To You..." id="meaningfulness_you1"></textarea>
							</div>
							<p class="hint"><i>To Others...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black green" placeholder="To Others..." id="meaningfulness_other1"></textarea>
							</div>
							<label class="subtitle" align="left">Impact: </label>
							<p class="hint"><i>To You...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black light-blue" placeholder="To You..." id="impact_you1"></textarea>
							</div>
							<p class="hint"><i>To Others...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black light-blue" placeholder="To Others..." id="impact_other1"></textarea>
							</div>
						</div>
					</div>

					<div class="col-md-4 d-flex flex-column">
						<div class="encase encase-blue breathe-right" style="padding: 10px;">
							<label class="subtitle" align="left"><b>2</b> Title: </label>
							<input type="text" class="title-border input" id="title2">
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black orange" placeholder="Description"id="description2"></textarea>
							</div>
							<label class="subtitle" align="left">Meaningfulness: </label>
							<p class="hint"><i>To You...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black green" placeholder="To You..." id="meaningfulness_you2"></textarea>
							</div>
							<p class="hint"><i>To Others...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black green" placeholder="To Others..." id="meaningfulness_other2"></textarea>
							</div>
							<label class="subtitle" align="left">Impact: </label>
							<p class="hint"><i>To You...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black light-blue" placeholder="To You..." id="impact_you2"></textarea>
							</div>
							<p class="hint"><i>To Others...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black light-blue" placeholder="To Others..." id="impact_other2"></textarea>
							</div>
						</div>
					</div>

					<div class="col-md-4 d-flex flex-column">
						<div class="encase encase-blue breathe-right" style="padding: 10px;">
							<label class="subtitle" align="left"><b>3</b> Title: </label>
							<input type="text" class="title-border input" id="title3">
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black orange" placeholder="Description" id="description3"></textarea>
							</div>
							<label class="subtitle" align="left">Meaningfulness: </label>
							<p class="hint"><i>To You...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black green" placeholder="To You..." id="meaningfulness_you3"></textarea>
							</div>
							<p class="hint"><i>To Others...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black green" placeholder="To Others..." id="meaningfulness_other3"></textarea>
							</div>
							<label class="subtitle" align="left">Impact: </label>
							<p class="hint"><i>To You...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black light-blue" placeholder="To You..." id="impact_you3"></textarea>
							</div>
							<p class="hint"><i>To Others...</i></p>
							<div class="form-group flex-grow-1 d-flex flex-column">
								<textarea class="form-control flex-grow-1	black light-blue" placeholder="To Others..." id="impact_other3"></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="row"style="padding-left: 15px; padding-right: 15px;">
					<div class="col-md-12 d-flex flex-column encase encase-blue">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	no-border" placeholder="What these were fundamentally about..." id="fundamental"></textarea>
						</div>
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
						<h6 id="datetime"></h6>
					</div>
				</div>
				<script>
					let date = new Date();
					setInterval(() => {
						date = new Date();
						$('#datetime')[0].innerHTML = date.toLocaleString();
					}, 1000);
				</script>
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
