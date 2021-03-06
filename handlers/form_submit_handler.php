<?php
	ini_set('session.cookie_lifetime', 31536000);
	ini_set('session.gc_maxlifetime', 31536000);
	session_start();

  require_once "../db/config.php";

  function getQuery($form, $link) {
		if (isset($_SESSION["id"])) {
	    $id = $_SESSION["id"];
		} else {
			$id = $_COOKIE["_id"];
		}
    if (isset($_SESSION["selected_id"])) {
      $id = $_SESSION["selected_id"];
    }
    $query_sel = "SELECT * from ".$form." where user_id=".$id;
    $conn_sel = $link->prepare($query_sel);
    $conn_sel->execute();
    $row_sel = $conn_sel->fetch();
    if (gettype($row_sel) === gettype(false)) {
      $query = "INSERT INTO $form (user_id,";
      $count = 0;
      foreach($_POST as $key => $val) {
        if ($val !== $form) {
          $query = $query."$key";
          if ($count < count($_POST)-1) {
            $query = $query.",";
          }
        }
        $count = $count + 1;
      }
      $query = $query.") VALUES(".$id.",";
      $count = 0;
      foreach($_POST as $key => $val) {
        if ($val !== $form) {
					$tmp = addslashes($val);
          $query = $query."'$tmp'";
          if ($count < count($_POST)-1) {
            $query = $query.",";
          }
        }
        $count = $count + 1;
      }
      $query = $query.")";
      return $query;
    } else {
      $query = "UPDATE $form SET ";
      $count = 0;
      foreach($_POST as $key => $val) {
        if ($val !== $form) {
					$tmp = addslashes($val);
          $query = $query."$key='$tmp'";
          if ($count < count($_POST)-1) {
            $query = $query.", ";
          }
        }
        $count = $count + 1;
      }
      $query = $query." WHERE user_id=".$id;
      return $query;
    }
  }

  if (isset($_POST["form"])) {
    $query = getQuery($_POST["form"], $link);
    $conn = $link->prepare($query);
    $suc = $conn->execute();
    if ($suc !== true) {
      echo "Save Failed";
    } else {
      echo "Save Success";
    }
  }
?>
