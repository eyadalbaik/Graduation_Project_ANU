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





session_start();

//$_SESSION['food2']=$_POST['q'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>mawaqe3.net</title>
        <link rel="stylesheet" href="file_style.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       
        <script src="script_ss.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<?php

$sql69 = "update choose set naumber=".$_GET['name'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

$result69 = mysqli_query($conn, $sql69);





$sql79 = "select naumber from  choose where id=1";

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

$result79 = mysqli_query($conn, $sql79);

$row79 = mysqli_fetch_assoc($result79);


$_SESSION['food']=$row79['naumber'];




//////////////////////////////////////////////////



$sql89 = "select naumber from  choose where id=2";

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

$result89 = mysqli_query($conn, $sql89);

$row89 = mysqli_fetch_assoc($result89);


$_SESSION['food2']=$row89['naumber'];



///////////////////////////////////////

//$_SESSION['food']=$_POST['name'];

$sql440 = "SELECT id,type,name FROM foods where type=".$_GET['q'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

$result440 = mysqli_query($conn, $sql440);

//echo $result;
//echo "</br>";

echo "<select name='foods' id='foods'>";
   
    // <option value="saab">Saab</option>
    // <option value="opel">Opel</option>
    // <option value="audi">Audi</option>
//echo "<table>";

//echo "</br>test7</br>";
//mysqli_query($conn, $sql);
if (mysqli_num_rows($result440) > 0) {
  //echo "</br>h7</br>";
    // output data of each row
   while($row440 = mysqli_fetch_assoc($result440)) {
    //echo "</br>h8</br>";

    echo "<option value=".$row440['id'].">".$row440['name']."</option>";
     //echo "<tr>";
//echo "<td><form method="post" action="add_service.php"><input type="submit" name="button2" class="button" value="ADD" /></form></td>";
//echo "<td><a href='index.php?id=".$row3['id']."'>Show</a></td>";
       // echo "<td>" . $row3["id"] . "</td>" . "<td>" . $row3["name"] . "</td>";
		//"<td>".$row3["details"]."</td><td><a href='delete.php?id=".$row3['id']."'>DELETE</a>"."</td>"." " . "<br>";

//echo "</tr>";
  //echo "</br>h9</br>";

}

}


echo "</select>";




//////////////////////////////////////////





mysqli_close($conn);



//header("Location:index.php");

?>

</body></html>