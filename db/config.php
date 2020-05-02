<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pursuit_frameworks');

/* Attempt to connect to MySQL database */
try {
  $link = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME,
    DB_USERNAME,
    DB_PASSWORD,
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(PDOException $ex) {
  die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}

// $test = $link->prepare("SELECT * from user");
// $test->execute();
// while($row = $test->fetch()) {
//   foreach(array_keys($row) as $key) {
//     echo $key.": ".$row[$key]."<br>";
//   }
// }
?>
