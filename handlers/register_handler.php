<?php
	ini_set('session.cookie_lifetime', 31536000);
	ini_set('session.gc_maxlifetime', 31536000);
	session_start();

  require_once "../db/config.php";

  $res = new stdClass();
  $res->success = false;
  $res->msg = "Error: Invalid registration fields, please try again";
  $res->fname = "ERROR";
  $res->lname = "ERROR";
  $res->email = "ERROR";
  $res->id = -1;
  $res->access = -1;

  // foreach($_POST as $key => $value) {
  //   echo "$key: $value <br>";
  // }

  if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_SESSION["id"])) { //valid input
    $query_sel = "SELECT * from user where email=\"".$_POST["email"]."\"";
    $conn_sel = $link->prepare($query_sel); //sanitizes inputs
    $conn_sel->execute();

    $row = $conn_sel->fetch();
    if (gettype($row) !== gettype(false)) { //if there is a user matching credentials
      $res->msg = "User is already registered, please use a different email";
      $res->success = false;
      $res->fname = $row["fname"];
      $res->lname = $row["lname"];
      $res->id = $row["id"];
      $res->access = $row["access"];
    } else { //no user found, create user
      $res->msg = "Registration pending...";
      $res->fname = $_POST["fname"];
      $res->lname = $_POST["lname"];
      $res->email = $_POST["email"];
      $res->id = 4;
      $res->success = true;

      $query = "INSERT INTO user (fname, lname, email, password, access, created_by) ".
        "VALUES(\"".$_POST["fname"]."\", \"".$_POST["lname"]."\", \"".$_POST["email"]."\", \"".$_POST["password"]."\", 4, ".$_SESSION["id"].")";
      $conn = $link->prepare($query);
      $suc = $conn->execute();
      if ($suc == true) {
        $res->msg = "Registration successful!";
      } else {
        $res->msg = "Registration failed on database insert";
      }
    }
  }

  echo json_encode($res);
?>
