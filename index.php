<?php
	ini_set('session.cookie_lifetime', 31536000);
	ini_set('session.gc_maxlifetime', 31536000);
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

		<div class="body_content">
			<div class="container">
				<div class="encase" style="padding-bottom: 20px; padding-top: 20px;">
					<div class="row" align="center">
						<div class="col-md-12">
							<h3 class="title-burnt-red" style="padding-bottom: 10px;">Frameworks</h3>
						</div>
					</div>
					<div class="row" align="center" style="padding-bottom: 10px;">
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/me.php" class="index-link">My Meaningful Experiences</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/world_view.php" class="index-link">My World View</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/natural_approach.php" class="index-link">My Natural Approach</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/authority.php" class="index-link">My Relationship to Authority</a>
							</div>
						</div>
					</div>
					<div class="row" align="center">
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/purpose.php" class="index-link">My Purpose</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/lighthouse.php" class="index-link">My Proactive Stand</a>
							</div>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/authentic_role.php" class="index-link">My Authentic True Role</a>
							</div>
						</div>
					</div>
				</div>

				<div class="encase" style="padding-bottom: 20px; padding-top: 20px;">
					<div class="row" align="center">
						<div class="col-md-12">
							<h3 class="title-burnt-red" style="padding-bottom: 10px;">Your Account Information</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5" style="padding-left: 80px;">
							<h6 id="name"></h6>
						</div>
						<div class="col-md-7">
							<h6 id="email"></h6>
							<div id="admin"></div>
						</div>
					</div>
					<div class="row" style="padding-top: 40px;">
						<div class="col-md-5"></div>
						<div class="col-md-7">
							<h6>You May Reset Your Password:</h6>
						</div>
					</div>
					<div class="row" style="padding-top: 10px;">
						<div class="col-md-5"></div>
						<div class="col-md-7">
							<div class="row" style="padding-right: 40px;">
								<div class="col-md-5">
									<h6>New Password:</h6>
								</div>
								<div class="col-md-7">
									<input type="password" style="width: 100%;" id="password" name="password">
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="padding-right: 40px;">
						<div class="col-md-6"></div>
						<div class="col-md-6" align="right" style="padding-top: 10px;">
							<button type="button" onclick="reset_password()">Update</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			if (isset($_SESSION["id"])) {
				echo "<script>cur_user=".$_SESSION["id"].";</script>";
			}
		?>
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
