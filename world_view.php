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

		<script src"assets/js/world_view.js"></script>
	</head>

	<body>
		<header class="header-area header-sticky" id="header">
			<div class="">
				<div class="">
					<div class="">
						<nav class="main-nav">
							<!-- ***** Logo Start ***** -->
							<a href="/index.php" class="logo">
								<img src="assets/img/logo.png" height=40/>

							</a>
							<!-- ***** Logo End ***** -->
							<!-- ***** Menu Start ***** -->
							<ul class="nav">
								<li><a href="./index.php" class="active">Home</a></li>
								<li class="dropdown">
									<a class="dropbtn">Frameworks
										<i class="fa fa-caret-down"></i>
									</a>
									<div class="dropdown-content">
										<a href="./world_view.php">World View</a>
										<a href="./me.php">Me</a>
										<a href="./purpose.php">Purpose</a>
										<a href="./lighthouse.php">Lighthouse</a>
									</div>
								</li>
								<li><a href="./login.php">Login/Logout</a></li>
							</ul>
							<!-- ***** Menu End ***** -->
						</nav>
					</div>
				</div>
			</div>
		</header>

		<div class="body_content">
			<h3 align="center" class="title"><b>My World View</b></h3>

			<div class="container">
				<hr class="title-line">

				<!-- Title Row 1 -->
				<div class="row" align="center">
					<div class="col-md-6">
						<h6 style="color: red;">(-) Burns Energy</h6>
					</div>
					<div class="col-md-6">
						<h6 style="color: blue;">(+) Builds Energy</h6>
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
							<textarea class="form-control flex-grow-1	black" id="feel_neg"></textarea>
						</div>
					</div>

					<!-- Textarea Row 1a -->
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	black" id="big_world_neg"></textarea>
								</div>
							</div>
							<div class="col-md-6 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	black" id="big_world_pos"></textarea>
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
							<textarea class="form-control flex-grow-1	black" id="feel_pos"></textarea>
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
							<textarea style="width: 135%;" class="form-control flex-grow-1 black" id="react_neg"></textarea>
						</div>
					</div>

					<div class="col-md-8">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	red" id="work_world_neg"></textarea>
								</div>
							</div>
							<div class="col-md-5 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	red" id="work_world_pos"></textarea>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
					</div>

					<div class="col-md-2 d-flex flex-column">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea style="width: 135%; position: relative; left: -35%;" class="form-control flex-grow-1 black" id="respond_pos"></textarea>
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
							<textarea class="form-control flex-grow-1	black" id="impact_neg">Me: &#13;&#10;Others: &#13;&#10;World: </textarea>
						</div>
					</div>

					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	green" id="personal_world_neg"></textarea>
								</div>
							</div>
							<div class="col-md-6 d-flex flex-column">
								<div class="form-group flex-grow-1 d-flex flex-column">
									<textarea class="form-control flex-grow-1	green" id="personal_world_pos"></textarea>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 d-flex flex-column">
						<div class="form-group flex-grow-1 d-flex flex-column">
							<textarea class="form-control flex-grow-1	black" id="impact_pos">Me: &#13;&#10;Others: &#13;&#10;World: </textarea>
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
						<input type="text" class="black" id="position_neg">
					</div>
					<div class="col-md-2" align="center">
						<img src="assets/img/globe.png" height=50>
					</div>
					<div class="col-md-4 d-flex flex-column">
						<input type="text" class="black" id="position_pos">
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
