<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "csc";

$conn = mysqli_connect($host, $user, $pass, $db);
$r = mysqli_query ( $conn,"SELECT * FROM `users`");


if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>

