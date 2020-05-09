<?php
  session_start();

  require_once "../db/config.php";

  $res = new stdClass();
  $res->success = false;
  $res->msg = "Error: Invalid registration fields, please try again";
  $res->fname = "";
  $res->lname = "";
  $res->email = "";
  $res->id = -1;
  $res->access = -1;

  $user_fields = array("fname", "lname", "email", "password");

  // foreach($_POST as $key => $value) {
  //   echo "$key: $value <br>";
  // }

  if (isset($_POST["id"])) { //valid input
    $query_sel = "SELECT * from user where id=\"".$_POST["id"]."\"";
    $conn_sel = $link->prepare($query_sel); //sanitizes inputs
    $conn_sel->execute();

    $row = $conn_sel->fetch();
    if (gettype($row) !== gettype(false)) { //if there is a user matching id
      $query = "UPDATE user SET ";
      foreach ($user_fields as $f) {
        if (isset($_POST[$f])) {
          $query = $query."$f=\"".$_POST[$f]."\", ";
          if ($f !== "password") {
            $res->$f = $_POST[$f];
          }
        }
      }
      $query = rtrim($query, ", ");
      $query = $query." WHERE id=".$_POST["id"];

      $conn = $link->prepare($query);
      $suc = $conn->execute();

      if ($suc == true) {
        $res->msg = "Update successful!";
        $res->success = true;
      } else {
        $res->msg = "Update on database failed, try again";
      }
      $res->id = $row["id"];
      $res->access = $row["access"];
    } else {
      $res->msg = "No user found with selected ID, choose a new user and try again";
    }
  }

  echo json_encode($res);
?>
