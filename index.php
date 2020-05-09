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
			<div class="container">
				<div class="encase" style="padding-bottom: 20px; padding-top: 20px;">
					<div class="row" align="center">
						<div class="col-md-12">
							<h3 class="title" style="padding-bottom: 10px;">Frameworks</h3>
						</div>
					</div>
					<div class="row" align="center">
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/world_view.php" class="index-link">My World View</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/lighthouse.php" class="index-link">Lighthouse</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/purpose.php" class="index-link">Purpose</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="encase-bg">
								<a href="/me.php" class="index-link">Me</a>
							</div>
						</div>
					</div>
				</div>

				<div class="encase" style="padding-bottom: 20px; padding-top: 20px;">
					<div class="row" align="center">
						<div class="col-md-12">
							<h3 class="title" style="padding-bottom: 10px;">Account</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6" style="padding-left: 80px;">
							<h5 id="name"></h5>
						</div>
						<div class="col-md-6" style="padding-left: 80px;">
							<h5 id="email"></h5>
							<i><h6 id="admin"></h6></i>
						</div>
					</div>
					<div class="row" style="padding-top: 40px;">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<h5>Reset Your Password</h5>
						</div>
					</div>
					<div class="row" style="padding-top: 10px;">
						<div class="col-md-6"></div>
						<div class="col-md-6">
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
