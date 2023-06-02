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


?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product</title>
        <link rel="stylesheet" href="file_style.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       
        <script src="script_ss.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <style>
                
::-webkit-scrollbar {
          width: 15px;
        }
        
        
        ::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px grey; 
          border-radius: 10px;
        }
         
        
        ::-webkit-scrollbar-thumb {
          background: rgb(68, 82, 68); 
          border-radius: 10px;
        }

          #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.buy {
  background-color: #2196F3; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
text-decoration: none;
color: #f2f2f2;
}

a{
  text-decoration: none;
color: #f2f2f2;
}


        </style>

</head>
<body>

<?php

$sql35 = "SELECT code,quantity,price,statuss,description,user
FROM ve where code='".$_GET['name']."'";


$result35 = mysqli_query($conn, $sql35);

$row35 = mysqli_fetch_assoc($result35);

echo "<center>";
echo "<table id='customers'>";

echo "<tr>";
echo "<td> Farmer </td></td><td>  Name  </td><td>  Quantity  </td><td>  Price  </td>";
echo "<td>  Status   </td><td>  Description  </td><td>  Action  </td>";

echo "</tr>";



if (mysqli_num_rows($result35) > 0) {

    while($row35 = mysqli_fetch_assoc($result35)) {


    
$sql39 = "SELECT username
FROM users where   id =".$row35["user"];

$result39 = mysqli_query($conn, $sql39);

$row39 = mysqli_fetch_assoc($result39);
  echo "<tr >";

  echo "<td> ". $row39["username"]."</td><td>". $row35["code"]." </td>" . "<td> ". $row35["quantity"]."</td><td>".$row35["price"]."</td>";
        echo "<td>". $row35["statuss"]." </td><td> ". $row35["description"]."</td> 
        <td  class = 'buy' onclick='myFunction()'><a href='checkout.php'>Add to Cart</a><td>";
 

echo "</tr>";

}

}


echo "</table>";
echo "</center>";







mysqli_close($conn);




?>




</body></html>