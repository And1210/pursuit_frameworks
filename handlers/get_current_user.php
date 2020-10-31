<?php
  ini_set('session.gc_maxlifetime', 7200);
session_set_cookie_params(7200);
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

  if (isset($_SESSION["id"])) {
    $query = "SELECT * FROM user WHERE ";
    $query = $query."id=\"".$_SESSION["id"]."\"";
    $conn = $link->prepare($query);
    $suc = $conn->execute();

    $row = $conn->fetch();
    if (gettype($row) !== gettype(false)) {
      $res->success = true;
      $res->msg = "User with id ".$_SESSION["id"]." selected";

      $res->email = $row["email"];
      $res->fname = $row["fname"];
      $res->lname = $row["lname"];
      $res->id = $row["id"];
      $res->access = $row["access"];
    }
  }

  echo json_encode($res);

?>
