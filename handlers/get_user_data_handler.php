<?php
  session_start();

  require_once "../db/config.php";

  $res = new stdClass();
  $res->success = false;
  $res->msg = "No user found with that email, please register them first";
  $res->email = "ERROR";
  $res->fname = "ERROR";
  $res->lname = "ERROR";
  $res->id = -1;
  $res->access = -1;

  if (isset($_POST["email"])) {
    $query = "SELECT * FROM user WHERE email=\"".$_POST["email"]."\"";
    $conn = $link->prepare($query);
    $suc = $conn->execute();

    $row = $conn->fetch();
    if (gettype($row) !== gettype(false)) {
      $res->success = true;
      $res->msg = "User with email ".$_POST["email"]." selected";

      $res->fname = $row["fname"];
      $res->lname = $row["lname"];
      $res->id = $row["id"];
      $res->access = $row["access"];
    }
    $res->email = $_POST["email"];
  }

  echo json_encode($res);

?>
