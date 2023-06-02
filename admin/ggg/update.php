<?php
//include("conect.php");

error_reporting(0);
header("Location:index.php");


    session_start();
  //  session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csc";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


mysqli_query($conn,"SET CHARACTER SET utf8 ");

//echo '</br>test1</br>';






//echo "</br>test2</br>";

//$sql = "INSERT INTO
//users (name,job,details) values ('.$_POST[name].','Upadhyay','2020-06-26');";

$sql = "update  ve set statuss='".$_POST['statuss']."'  where user_id=".$_POST['id_u'];
//update contacts set phone='909090' and address='email' where user_id=36;
//update contacts set phone="909090" where user_id=36;
//INSERT INTO users(name,job,details)  VALUES('','','');
//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

$result = mysqli_query($conn, $sql);

//echo "</br>test3</br>";
//echo $_POST['name'];
//echo "</br>test3</br>";

//echo $_POST["name"];
//echo $_POST['name'];
//echo $_POST["job"];
//echo $_POST['industry'];
//echo $_POST["details"];
//echo $_POST['about'];



//echo "</br>test4</br>";






mysqli_close($conn);





////////////////////////////////////////////


//header('third.php');

header("Location:index.php");




?>
