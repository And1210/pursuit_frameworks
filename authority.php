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
		<title>My Relationship to Authority</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-3.5.0.min.js"></script>

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

		<div class="body_content">
			<h3 align="center" class="title"><b>My Relationship to Authority</b></h3>

			<div class="container">
				<hr class="title-line">

        <div class="row">
          <div class="col-md-4">
            <div align="center" style="padding-bottom: 20px;">
              <img src="assets/img/female.png" height=50>
            </div>
            <p class="hint"><i>How would you describe her?</i></p>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	black" placeholder="How would you describe her?" id=""></textarea>
            </div>
            <p class="hint"><i>What don't they see?</i></p>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	black" placeholder="What don't they see?" id=""></textarea>
            </div>
            <p class="hint"><i>How did she need to be loved?</i></p>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	black" placeholder="How did she need to be loved?" id=""></textarea>
            </div>
            <p class="hint"><i>If loved that way what be the impact?</i></p>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	black" placeholder="If loved that way what be the impact?" id=""></textarea>
            </div>
          </div>
          <div class="col-md-4">
            <br><br><br>
            <div class="subtitle" align="center">Core Tension</div>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	blue thick" placeholder="" id=""></textarea>
            </div>
            <div class="subtitle" align="center">Assumed Role</div>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	blue thick" placeholder="" id=""></textarea>
            </div>
            <br><br>
            <div class="subtitle" align="center">True Role</div>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	blue thick" placeholder="" id=""></textarea>
            </div>
          </div>
          <div class="col-md-4">
            <div align="center" style="padding-bottom: 20px;">
              <img src="assets/img/male.png" height=50>
            </div>
            <p class="hint"><i>How would you describe him?</i></p>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	black" placeholder="How would you describe him?" id=""></textarea>
            </div>
            <p class="hint"><i>What don't they see?</i></p>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	black" placeholder="What don't they see?" id=""></textarea>
            </div>
            <p class="hint"><i>How did he need to be loved?</i></p>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	black" placeholder="How did he need to be loved?" id=""></textarea>
            </div>
            <p class="hint"><i>If loved that way what be the impact?</i></p>
            <div class="form-group flex-grow-1 d-flex flex-column">
              <textarea class="form-control flex-grow-1	black" placeholder="If loved that way what be the impact?" id=""></textarea>
            </div>
          </div>
        </div>

				<div class="row">
					<div class="col-md-12" align="center">
						<a class="save-link" href="javascript:save()">Save</a>
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
