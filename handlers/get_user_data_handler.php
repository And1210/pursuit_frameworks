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

  if (isset($_POST["email"]) || isset($_POST["id"])) {
    $query = "SELECT * FROM user WHERE ";
    if (isset($_POST["email"])) {
      $query = $query."email=\"".$_POST["email"]."\"";
    } else {
      $query = $query."id=\"".$_POST["id"]."\"";
    }
    $conn = $link->prepare($query);
    $suc = $conn->execute();

    $row = $conn->fetch();
    if (gettype($row) !== gettype(false)) {
      $res->success = true;
      if (isset($_POST["email"])) {
        $res->msg = "User with email ".$_POST["email"]." selected";
      } else {
        $res->msg = "User with id ".$_POST["id"]." selected";
      }

      $res->email = $row["email"];
      $res->fname = $row["fname"];
      $res->lname = $row["lname"];
      $res->id = $row["id"];
      $res->access = $row["access"];
    }
  }

  echo json_encode($res);

?>
