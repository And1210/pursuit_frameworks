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
		</div>
	</body>

</html>
