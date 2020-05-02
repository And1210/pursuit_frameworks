<?php
  session_start();

  require_once "../db/config.php";

  function getQuery($form, $link) {
    $query_sel = "SELECT * from ".$_POST["form"]." where user_id=".$_SESSION["id"];
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
      $query = $query.") VALUES(".$_SESSION["id"].",";
      $count = 0;
      foreach($_POST as $key => $val) {
        if ($val !== $form) {
          $query = $query."\"$val\"";
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
          $query = $query."$key=\"$val\"";
          if ($count < count($_POST)-1) {
            $query = $query.", ";
          }
        }
        $count = $count + 1;
      }
      $query = $query." WHERE user_id=".$_SESSION["id"];
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
