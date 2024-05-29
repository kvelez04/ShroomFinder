<?php


$user = 'root';
$pass = '';
$db_name = 'shroom';

$mysqli = new mysqli('localhost', $user, $pass, $db_name);

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
else {
    //echo '<script>alert("Database Connected!")</script>';
}


?>