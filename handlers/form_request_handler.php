<?php
  session_start();

  require_once "../db/config.php";

  if (isset($_POST["form"]) && isset($_SESSION["id"])) {
    $query = "SELECT * FROM ".$_POST["form"]." WHERE user_id=".$_SESSION["id"];
    $conn = $link->prepare($query);
    $suc = $conn->execute();
    if ($suc === true) {
      $row = $conn->fetch();
      echo json_encode($row);
    } else {
      
    }
  }

?>
