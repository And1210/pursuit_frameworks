<?php
	ini_set('session.cookie_lifetime', 31536000);
	ini_set('session.gc_maxlifetime', 31536000);
	session_start();

  require_once "../db/config.php";

  $res = new stdClass();
  $res->success = false;
  $res->msg = "Error: Invalid fields, please try again";

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
      $query = "DELETE from user where id=\"".$_POST["id"]."\"";
      $conn = $link->prepare($query);
      $suc = $conn->execute();

      if ($suc == true) {
        $res->success = true;
        $res->msg = "User successfully deleted";
      } else {
        $res->msg = "Error on database delete request";
      }
    } else {
      $res->msg = "No user found with selected ID, choose a new user and try again";
    }
  }

  echo json_encode($res);
?>
