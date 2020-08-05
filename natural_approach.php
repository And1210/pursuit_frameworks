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
		<script src="assets/js/jspdf.min.js"></script>
		<script src="assets/js/html2canvas.min.js"></script>

		<script src="assets/js/pdf_save.js"></script>
		<script src="assets/js/natural_approach.js"></script>
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
			<h3 align="center" class="title"><b>My Natural Approach To Creating Value</b></h3>

			<div class="container">
				<hr class="title-line">

        <div class="row">
          <div class="col-md-4">
            <div class="encase encase-blue" style="padding: 10px;">
              <div class="row">
                <div class="col-md-12">
                  <div class="encase-block encase-light-blue" style="padding: 10px;">
      							<label class="subtitle" align="left">Phase 1:</label>
      							<input type="text" class="input title-border" style="width: 70%;" id="phase1_label">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="encase-block encase-light-blue">
                    <div style="padding-left: 10px; padding-right: 10px;">
                      <div class="row" style="padding-bottom: 5px;"><div class="col-md-12">
                        <div class="subtitle" style="font-size: 10pt;">'<b>Communication</b>' - What was Communicated?</div>
                      </div></div>
                      <div class="row">
                        <div class="col-md-6" style="padding-left: 7px !important; padding-right: 1px !important;" align="center">
                          <div class="subtitle" style="font-size: 10pt;">By Me</div>
            							<div class="form-group flex-grow-1 d-flex flex-column" style="margin-bottom: 1px !important;">
            								<textarea class="form-control flex-grow-1	light-blue medium1-input" placeholder="" id="phase1_comm_me"></textarea>
            							</div>
                        </div>
                        <div class="col-md-6" style="padding-left: 1px !important; padding-right: 7px !important;" align="center">
                          <div class="subtitle" style="font-size: 10pt;">By Others</div>
            							<div class="form-group flex-grow-1 d-flex flex-column" style="margin-bottom: 1px !important;">
            								<textarea class="form-control flex-grow-1	light-blue medium1-input" placeholder="" id="phase1_comm_others"></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="encase-block encase-light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div style="padding-left: 10px; padding-right: 10px;">
                          <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Actions</b>' - What did you do?</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	light-blue" placeholder="" id="phase1_actions"></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="encase-block encase-light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div style="padding-left: 10px; padding-right: 10px;">
                          <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Completions</b>' - What was created?</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	light-blue medium-input" placeholder="" id="phase1_completions"></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4"><div class="encase encase-blue" style="padding: 10px;">
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block encase-light-blue" style="padding: 10px;">
                  <label class="subtitle" align="left">Phase 2:</label>
                  <input type="text" class="input title-border" style="width: 70%;" id="phase2_label">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block encase-light-blue">
                  <div style="padding-left: 10px; padding-right: 10px;">
                    <div class="row" style="padding-bottom: 5px;"><div class="col-md-12">
                      <div class="subtitle" style="font-size: 10pt;">'<b>Communication</b>' - What was Communicated?</div>
                    </div></div>
										<div class="row">
											<div class="col-md-6" style="padding-left: 7px !important; padding-right: 1px !important;" align="center">
												<div class="subtitle" style="font-size: 10pt;">By Me</div>
												<div class="form-group flex-grow-1 d-flex flex-column" style="margin-bottom: 1px !important;">
													<textarea class="form-control flex-grow-1	light-blue medium1-input" placeholder="" id="phase2_comm_me"></textarea>
												</div>
											</div>
											<div class="col-md-6" style="padding-left: 1px !important; padding-right: 7px !important;" align="center">
												<div class="subtitle" style="font-size: 10pt;">By Others</div>
												<div class="form-group flex-grow-1 d-flex flex-column" style="margin-bottom: 1px !important;">
													<textarea class="form-control flex-grow-1	light-blue medium1-input" placeholder="" id="phase2_comm_others"></textarea>
												</div>
											</div>
										</div>
                  </div>
                </div>
                <div class="encase-block encase-light-blue">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Actions</b>' - What did you do?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	light-blue" placeholder="" id="phase2_actions"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="encase-block encase-light-blue">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Completions</b>' - What was created?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	light-blue medium-input" placeholder="" id="phase2_completions"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-4"><div class="encase encase-blue" style="padding: 10px;">
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block encase-light-blue" style="padding: 10px;">
                  <label class="subtitle" align="left">Phase 3:</label>
                  <input type="text" class="input title-border" style="width: 70%;" id="phase3_label">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block encase-light-blue">
                  <div style="padding-left: 10px; padding-right: 10px;">
                    <div class="row" style="padding-bottom: 5px;"><div class="col-md-12">
                      <div class="subtitle" style="font-size: 10pt;">'<b>Communication</b>' - What was Communicated?</div>
                    </div></div>
										<div class="row">
											<div class="col-md-6" style="padding-left: 7px !important; padding-right: 1px !important;" align="center">
												<div class="subtitle" style="font-size: 10pt;">By Me</div>
												<div class="form-group flex-grow-1 d-flex flex-column" style="margin-bottom: 1px !important;">
													<textarea class="form-control flex-grow-1	light-blue medium1-input" placeholder="" id="phase3_comm_me"></textarea>
												</div>
											</div>
											<div class="col-md-6" style="padding-left: 1px !important; padding-right: 7px !important;" align="center">
												<div class="subtitle" style="font-size: 10pt;">By Others</div>
												<div class="form-group flex-grow-1 d-flex flex-column" style="margin-bottom: 1px !important;">
													<textarea class="form-control flex-grow-1	light-blue medium1-input" placeholder="" id="phase3_comm_others"></textarea>
												</div>
											</div>
										</div>
                  </div>
                </div>
                <div class="encase-block encase-light-blue">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Actions</b>' - What did you do?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	light-blue" placeholder="" id="phase3_actions"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="encase-block encase-light-blue">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Completions</b>' - What was created?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	light-blue medium-input" placeholder="" id="phase3_completions"></textarea>
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
            <div class="encase encase-blue" style="padding: 10px;">
              <div class="row">
                <div class="col-md-12">
                  <div class="encase-block encase-light-blue" style="padding: 10px;">
      							<label class="subtitle" align="left">Phase 4:</label>
      							<input type="text" class="input title-border" style="width: 70%;" id="phase4_label">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="encase-block encase-light-blue">
                    <div style="padding-left: 10px; padding-right: 10px;">
                      <div class="row" style="padding-bottom: 5px;"><div class="col-md-12">
                        <div class="subtitle" style="font-size: 10pt;">'<b>Communication</b>' - What was Communicated?</div>
                      </div></div>
                      <div class="row">
                        <div class="col-md-6" style="padding-left: 7px !important; padding-right: 1px !important;" align="center">
                          <div class="subtitle" style="font-size: 10pt;">By Me</div>
            							<div class="form-group flex-grow-1 d-flex flex-column" style="margin-bottom: 1px !important;">
            								<textarea class="form-control flex-grow-1	light-blue medium1-input" placeholder="" id="phase4_comm_me"></textarea>
            							</div>
                        </div>
                        <div class="col-md-6" style="padding-left: 1px !important; padding-right: 7px !important;" align="center">
                          <div class="subtitle" style="font-size: 10pt;">By Others</div>
            							<div class="form-group flex-grow-1 d-flex flex-column" style="margin-bottom: 1px !important;">
            								<textarea class="form-control flex-grow-1	light-blue medium1-input" placeholder="" id="phase4_comm_others"></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="encase-block encase-light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div style="padding-left: 10px; padding-right: 10px;">
                          <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Actions</b>' - What did you do?</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	light-blue" placeholder="" id="phase4_actions"></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="encase-block encase-light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div style="padding-left: 10px; padding-right: 10px;">
                          <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Completions</b>' - What was created?</div>
            							<div class="form-group flex-grow-1 d-flex flex-column">
            								<textarea class="form-control flex-grow-1	light-blue medium-input" placeholder="" id="phase4_completions"></textarea>
            							</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4"><div class="encase encase-blue" style="padding: 10px;">
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block encase-light-blue" style="padding: 10px;">
                  <label class="subtitle" align="left">Phase 5:</label>
                  <input type="text" class="input title-border" style="width: 70%;" id="phase5_label">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="encase-block encase-light-blue">
                  <div style="padding-left: 10px; padding-right: 10px;">
                    <div class="row" style="padding-bottom: 5px;"><div class="col-md-12">
                      <div class="subtitle" style="font-size: 10pt;">'<b>Communication</b>' - What was Communicated?</div>
                    </div></div>
										<div class="row">
											<div class="col-md-6" style="padding-left: 7px !important; padding-right: 1px !important;" align="center">
												<div class="subtitle" style="font-size: 10pt;">By Me</div>
												<div class="form-group flex-grow-1 d-flex flex-column" style="margin-bottom: 1px !important;">
													<textarea class="form-control flex-grow-1	light-blue medium1-input" placeholder="" id="phase5_comm_me"></textarea>
												</div>
											</div>
											<div class="col-md-6" style="padding-left: 1px !important; padding-right: 7px !important;" align="center">
												<div class="subtitle" style="font-size: 10pt;">By Others</div>
												<div class="form-group flex-grow-1 d-flex flex-column" style="margin-bottom: 1px !important;">
													<textarea class="form-control flex-grow-1	light-blue medium1-input" placeholder="" id="phase5_comm_others"></textarea>
												</div>
											</div>
										</div>
                  </div>
                </div>
                <div class="encase-block encase-light-blue">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Actions</b>' - What did you do?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	light-blue" placeholder="" id="phase5_actions"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="encase-block encase-light-blue">
                  <div class="row">
                    <div class="col-md-12">
                      <div style="padding-left: 10px; padding-right: 10px;">
                        <div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;">'<b>Completions</b>' - What was created?</div>
                        <div class="form-group flex-grow-1 d-flex flex-column">
                          <textarea class="form-control flex-grow-1	light-blue medium-input" placeholder="" id="phase5_completions"></textarea>
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
            <div class="encase encase-blue" style="padding: 10px; margin-top: 20% !important; padding-bottom: 0px !important;">
							<div class="encase-block encase-light-blue">
								<div class="row">
									<div class="col-md-12">
										<div style="padding-left: 10px; padding-right: 10px;">
											<div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;"><b>How do you know you were finished?</b></div>
											<div class="form-group flex-grow-1 d-flex flex-column">
												<textarea class="form-control flex-grow-1	light-blue" placeholder="" id="finished"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
            <div class="encase encase-blue" style="padding: 10px; margin-top: 20% !important; padding-bottom: 0px !important;">
							<div class="encase-block encase-light-blue">
								<div class="row">
									<div class="col-md-12">
										<div style="padding-left: 10px; padding-right: 10px;">
											<div class="subtitle" style="font-size: 10pt; padding-bottom: 5px;"><b>How did this effort enrich people's lives?</b></div>
											<div class="form-group flex-grow-1 d-flex flex-column">
												<textarea class="form-control flex-grow-1	light-blue" placeholder="" id="lives"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
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
				<div class="col-sm-4" align="center">
					<p class="copyright"><br>Copyright &copy; 2007-2020 Pursuit
						Development Labs Inc. All Rights Reserved.</p>
				</div>
				<div class="col-sm-4" align="right">
					<div style="font-size: 8px;" id="datetime"></div>
				</div>
				<br>
				<br>
			</div>
		</div>
	</footer>

</html>
