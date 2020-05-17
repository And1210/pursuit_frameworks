<?php
	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false || !isset($_SESSION["loggedin"])){
		header("location: login.php");
		exit;
	} else { //user is loggedin, check if admin
    if (isset($_SESSION["access_level"]) && $_SESSION["access_level"] == 0) {

    } else {
      echo "<script>alert(\"You do not have access to this page\"); window.location.href=\"index.php\";</script>";
    }
  }
?>

<html>

	<head>
		<title>Admin</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/sjcl.min.js"></script>

		<script src="assets/js/admin.js"></script>
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
									<a class="dropbtn">Frameworks</a>
									<div class="dropdown-content">
										<a href="./me.php">My Meaningful Experiences</a>
										<a href="./purpose.php">My Purpose</a>
										<a href="./world_view.php">My World View</a>
										<a href="./lighthouse.php">My Proactive Stand</a>
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
    <div class="container">
      <div class="row" style="padding-bottom: 20px;">
        <div class="col-md-12">
          <h3>Admin Console</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h5>Register a User</h5>
          <iframe src="register.php" height=300 frameBorder="0" style="width: 100%;"></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h5>View a User's Forms</h5>
          <iframe src="admin_view.php" height=300 frameBorder="0" style="width: 100%;"></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h5>Update a User's Settings</h5>
          <iframe src="update.php" height=500 frameBorder="0" style="width: 100%;"></iframe>
        </div>
      </div>
    </div>
	</body>

</html>
