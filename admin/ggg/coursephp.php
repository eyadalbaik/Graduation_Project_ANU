<?php
$servername = "localhost";

$username = "root";

$password = "";
$dbname = "csc";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$result = mysqli_query ( $conn,"SELECT * FROM `ve`");

$user=$_SESSION['id'];

if(count($_POST)>0){

$cid=$_POST['id '];
$username=$_POST['name-v'];
$email=$_POST['price-v'];
$sql = "INSERT INTO `ve`( `name-v`, `price-v`,'user') VALUES ('$username','$email','$user')";

if (mysqli_query($conn, $sql)) {

echo json_encode(array("statusCode"=>200));
}

else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($conn);

}

?>