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
		<title>My Natural Approach To Creating Value</title>

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
			<h3 align="center" class="title"><b>My Natural Approach To Creating Value</b></h3>

			<div class="container">
				<hr class="title-line">

        <div class="row">
          <div class="col-md-4">
            <div class="encase" style="padding: 10px;">
              <div class="row">
                <div class="col-md-12">
                  <div class="encase-block" style="padding: 10px;">
      							<label class="subtitle" align="left">Phase 1:</label>
      							<input type="text" class="title-border" style="width: 70%;" id="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="encase-block">
                    <div style="padding-left: 10px; padding-right: 10px;">
                      <div class="row" style="padding-bottom: 5px;"><div class="col-md-12">
                        <div class="subtitle" style="font-size: 10pt;">'<b>Communication</b>' - What was Communicated?</div>
                      </div></div>
                      <div class="row">
                        <div class="col-md-6" align="center">
                          <div class="subtitle" style="font-size: 10pt;">By Me</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
            							</div>
                        </div>
                        <div class="col-md-6" align="center">
                          <div class="subtitle" style="font-size: 10pt;">By Others</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="encase-block">
                    <div class="row">
                      <div class="col-md-12">
                        <div style="padding-left: 10px; padding-right: 10px;">
                          <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Actions</b>' - What did you do?</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="encase-block">
                    <div class="row">
                      <div class="col-md-12">
                        <div style="padding-left: 10px; padding-right: 10px;">
                          <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Completions</b>' - What was created?</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4"><div class="encase" style="padding: 10px;">
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block" style="padding: 10px;">
                  <label class="subtitle" align="left">Phase 2:</label>
                  <input type="text" class="title-border" style="width: 70%;" id="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block">
                  <div style="padding-left: 10px; padding-right: 10px;">
                    <div class="row" style="padding-bottom: 5px;"><div class="col-md-12">
                      <div class="subtitle" style="font-size: 10pt;">'<b>Communication</b>' - What was Communicated?</div>
                    </div></div>
                    <div class="row">
                      <div class="col-md-6" align="center">
                        <div class="subtitle" style="font-size: 10pt;">By Me</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                      <div class="col-md-6" align="center">
                        <div class="subtitle" style="font-size: 10pt;">By Others</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="encase-block">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Actions</b>' - What did you do?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="encase-block">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Completions</b>' - What was created?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-4"><div class="encase" style="padding: 10px;">
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block" style="padding: 10px;">
                  <label class="subtitle" align="left">Phase 3:</label>
                  <input type="text" class="title-border" style="width: 70%;" id="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block">
                  <div style="padding-left: 10px; padding-right: 10px;">
                    <div class="row" style="padding-bottom: 5px;"><div class="col-md-12">
                      <div class="subtitle" style="font-size: 10pt;">'<b>Communication</b>' - What was Communicated?</div>
                    </div></div>
                    <div class="row">
                      <div class="col-md-6" align="center">
                        <div class="subtitle" style="font-size: 10pt;">By Me</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                      <div class="col-md-6" align="center">
                        <div class="subtitle" style="font-size: 10pt;">By Others</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="encase-block">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Actions</b>' - What did you do?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="encase-block">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Completions</b>' - What was created?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="encase" style="padding: 10px;">
              <div class="row">
                <div class="col-md-12">
                  <div class="encase-block" style="padding: 10px;">
      							<label class="subtitle" align="left">Phase 4:</label>
      							<input type="text" class="title-border" style="width: 70%;" id="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="encase-block">
                    <div style="padding-left: 10px; padding-right: 10px;">
                      <div class="row" style="padding-bottom: 5px;"><div class="col-md-12">
                        <div class="subtitle" style="font-size: 10pt;">'<b>Communication</b>' - What was Communicated?</div>
                      </div></div>
                      <div class="row">
                        <div class="col-md-6" align="center">
                          <div class="subtitle" style="font-size: 10pt;">By Me</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
            							</div>
                        </div>
                        <div class="col-md-6" align="center">
                          <div class="subtitle" style="font-size: 10pt;">By Others</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="encase-block">
                    <div class="row">
                      <div class="col-md-12">
                        <div style="padding-left: 10px; padding-right: 10px;">
                          <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Actions</b>' - What did you do?</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="encase-block">
                    <div class="row">
                      <div class="col-md-12">
                        <div style="padding-left: 10px; padding-right: 10px;">
                          <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Completions</b>' - What was created?</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4"><div class="encase" style="padding: 10px;">
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block" style="padding: 10px;">
                  <label class="subtitle" align="left">Phase 5:</label>
                  <input type="text" class="title-border" style="width: 70%;" id="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block">
                  <div style="padding-left: 10px; padding-right: 10px;">
                    <div class="row" style="padding-bottom: 5px;"><div class="col-md-12">
                      <div class="subtitle" style="font-size: 10pt;">'<b>Communication</b>' - What was Communicated?</div>
                    </div></div>
                    <div class="row">
                      <div class="col-md-6" align="center">
                        <div class="subtitle" style="font-size: 10pt;">By Me</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                      <div class="col-md-6" align="center">
                        <div class="subtitle" style="font-size: 10pt;">By Others</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="encase-block">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Actions</b>' - What did you do?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="encase-block">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Completions</b>' - What was created?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="encase" style="padding: 10px; margin-top: 20% !important; padding-bottom: 0px !important;">
							<div class="encase-block">
								<div class="row">
									<div class="col-md-12">
										<div style="padding-left: 10px; padding-right: 10px;">
											<div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;"><b>How do you know you were finished?</b></div>
											<div class="form-group flex-grow-1 d-flex flex-column">
												<textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
            <div class="encase" style="padding: 10px; margin-top: 20% !important; padding-bottom: 0px !important;">
							<div class="encase-block">
								<div class="row">
									<div class="col-md-12">
										<div style="padding-left: 10px; padding-right: 10px;">
											<div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;"><b>How did this effort enrich people's lives?</b></div>
											<div class="form-group flex-grow-1 d-flex flex-column">
												<textarea class="form-control flex-grow-1	black" placeholder="" id=""></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
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
