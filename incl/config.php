<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phoenix";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
