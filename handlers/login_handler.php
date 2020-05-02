<?php
  session_start();

  require_once "../db/config.php";

  $res = new stdClass();
  $res->success = false;
  $res->msg = "Error: Invalid login credentials";
  $res->id = -1;

  if (isset($_POST["email"]) && isset($_POST["password"])) { //valid input
    $query = "SELECT * from user where email=\"".$_POST["email"]."\" and password=\"".$_POST["password"]."\"";
    $conn = $link->prepare($query); //sanitizes inputs
    $conn->execute();

    $row = $conn->fetch();
    if (gettype($row) !== gettype(false)) { //if there is a user matching credentials
      $res->msg = "Login successful! Welcome ".$row["fname"];
      $res->success = true;
      $res->id = $row["id"];
    } else {
      $res->msg = "Login failed, check your credentials and try again";
      $res->success = false;
    }
  }

  $_SESSION["loggedin"] = $res->success;
  $_SESSION["id"] = intval($res->id);

  echo json_encode($res);
?>
