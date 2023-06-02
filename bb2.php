<?php
session_start();
//  session_start();



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csc";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//echo "</br>";

/////////////////////////////////
//mysqli_set_charset('utf8');
//mysql_query("SET NAMES 'utf8'");
//mysql_query('SET CHARACTER SET utf8');

////////////////select_Arabic_Data/////////////////////
//echo "</br>test5</br>";
mysqli_query($conn,"SET CHARACTER SET utf8 ");

?>

<!DOCTYPE html>
<html lang="en">
<head>



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .Wizard_wizardDetailContainer__rY6yV {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 1px 2px 0 hsl(0deg 0% 40% / 18%);
}



.ErrorAlert_alertIconCircle__sqjJ4 {
    -webkit-margin-end: 5px;
    align-items: center;
    border: 2px solid;
    border-radius: 50%;
    display: flex;
    height: 32px;
    justify-content: center;
    margin-inline-end: 5px;
    width: 32px;
}



.Wizard_alertContainer__Be2eH {
    display: none;
    margin-bottom: -20px;
    opacity: 0;
    padding: 30px 30px 0;
}




body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}


    </style>

</head>
<body>

<?php

$sql195 = "SELECT id,username,email,password,user_type  
    FROM users where username='".$_POST['username']."'  and password='".$_POST['password']."'";
   // where user_id= ".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

$result195 = mysqli_query($conn, $sql195);

$row195 = mysqli_fetch_assoc($result195);




//if (mysqli_num_rows($result195) > 0) {
    if (mysqli_num_rows($result195) > 0) {
    //echo "</br>h7</br>";
    $_SESSION['id'] = $row195['id'];
      // output data of each row
      //while($row195 = mysqli_fetch_assoc($result195)) {
        //echo "</br>h8</br>";
       //echo "<tr>";
    //echo "yes";
    //echo $row195['user_type'];
    if($row195['user_type']=='admin'){
    
      header("Location:admin/ggg/index.php");

      
        //echo "admin";
    }

    if($row195['user_type']=='user'){
        header("Location:error.php");
        //echo "user";

      }
          //echo "<td>".$row4["user_id"]."</td>"."<td>".$row4["fname"]."</td>".
          //"<td>".$row4["job"].
          //echo "<img src='".$row44['photo3']."'  style='width:50px;height:50px;'>";
          //header("Location:pages.php");
        //   echo "<div class='image_66'>";
        //   echo "<img class ='img_6' src='".$row44['path']."' id='img'  width='150' height='150'>";
        //   echo "<i class='material-icons'  onclick='remove_image(".$row44['id'].")'  style='background-size: 40px; width:70px;'>delete</i> ";
        //   echo "</div>";
  
  
  //echo "</tr>";




 //}
  
  }
  else if (mysqli_num_rows($result195) == 0)
 {
    //echo "no";
   header("Location:error.php");
}


mysqli_close($conn);


?>





</body>
</html>
