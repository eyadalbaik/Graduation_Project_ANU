<?php

// $servername = "localhost";

// $username = "root";

// $password = "";
// $dbname = "csc";

// $conn = mysqli_connect($servername, $username, $password, $dbname);
// $result = mysqli_query ( $conn,"SELECT * FROM `users`");



// if (!$conn) {

//     die("Connection failed: " . mysqli_connect_error());

// }




$servername = "localhost";

$username = "root";

$password = "";
$dbname = "csc";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$result = mysqli_query ( $conn,"SELECT * FROM `ve`");



if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}

?>

