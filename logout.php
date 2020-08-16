<?php
  session_start();

  // Unset all of the session variables.
  $_SESSION = array();

  // If it's desired to kill the session, also delete the session cookie.
  // Note: This will destroy the session, and not just the session data!
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
  }

  // Finally, destroy the session.
  session_destroy();

  header("location: login.php");
?>

<html>


  <head>
    <title>Pursuit Inc.</title>

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.5.0.min.js"></script>
  </head>

  <body>
    <p>You have successfully logged out</p>
    <a href="/">Home</a>
  </body>

</html>
