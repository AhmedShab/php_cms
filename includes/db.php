<?php require_once "../vendor/autoload.php"; ?>

<?php

$dotenv = new Dotenv\Dotenv(__DIR__ . "/..");
$dotenv->load();

$host = getenv("HOST");
$username = getenv("USERNAME");
$password = getenv("PASSWORD");

$connection = mysqli_connect($host, $username, $password, "cms");

if ($connection) {
  echo "We are connected";
}


?>
