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

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products</title>
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

          body{
            background: #eee;
          }
          #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  /* display: none; */
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

.but {
  background-color: #2196F3; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 16px;

}

a{
  text-decoration: none;
color: #B12D2D;
}







* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #FFFFFF;
  border-radius:20px  0 0 20px;
  outline-style: none;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  border-radius:0 20px 20px 0;

}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}






/* hader */





.header{
    position: fixed;
    top:0; left:0; right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:2rem 9%;
    background:#FFFFFF;
    box-shadow: var(--box-shadow);
}

.header .logo{
    font-size: 2rem;
    font-weight: bolder;
    color:var(--black);
}

.header .logo i{
    color:var(--orange);
}

.header .navbar a{
    font-size: 1.3rem;
    margin:0 1rem;
    color:var(--black);
}

.header .navbar a:hover{
    color:orange;
}

.header .icons div{
    height: 4.5rem;
    width: 4.5rem;
    line-height: 4.5rem;
    border-radius: .5rem;
    background: #eee;
    color:var(--black);
    font-size: 2rem;
    margin-left: .3rem;
    cursor: pointer;
    text-align: center;
}

.header .icons div:hover{
    background: var(--orange);
    color:#fff;
}


        </style>


</head>
<body>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket" style="color:orange"></i> VEGGIE </a> &nbsp;

    <nav class="navbar">
        <a href="index.php">Back to Home</a>
       

    </nav>

</header>
<br><br><br><br><br><br>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search.php?q="+str,true);
  xmlhttp.send();
}
</script>
<!-- </head>
<body> -->
</br>
<center>
<form class="example" style="background-color:#fff ;">
<input type="text" size="30" onkeyup="showResult(this.value)">
<button type="submit"><i class="fa fa-search"></i></button>

<div id="livesearch"></div>
</form>
</center>
</br>

<!-- <input type='text' id='fname' name='fname' value='John'><br> -->

<?php
// $_SESSION['food']=$_POST['name'];

$sql440 = "SELECT code,sum(quantity) as quant,sum(price) as price FROM ve group  by code";


$result440 = mysqli_query($conn, $sql440);



echo "<center>";
echo "<table id='customers'>";

echo "<tr>";
echo "<td>  Name  </td><td>  Quantity  </td><td>  Price  </td> <td>  Details  </td>";

echo "</tr>";
//echo "</br>test7</br>";
//mysqli_query($conn, $sql);
if (mysqli_num_rows($result440) > 0) {
  //echo "</br>h7</br>";
    // output data of each row
    while($row440 = mysqli_fetch_assoc($result440)) {
    //echo "</br>h8</br>";

   // echo "<option value=".$row440['id'].">".$row440['name']."</option>";
     echo "<tr>";
//echo "<td><form method="post" action="add_service.php"><input type="submit" name="button2" class="button" value="ADD" /></form></td>";
//echo "<td><a href='index.php?id=".$row3['id']."'>Show</a></td>";

        echo "<td>". $row440["code"]." </td>" . "<td> ". $row440["quant"]."</td><td>".$row440["price"]."</td>";
		//"<td>".$row3["details"]."</td><td><a href='delete.php?id=".$row3['id']."'>DELETE</a>"."</td>"." " . "<br>";
        echo "<td class='but'><a href='products2.php?name=".$row440["code"]."'>";
        echo "Details</a></td>";
echo "</tr>";
  //echo "</br>h9</br>";

}

}


//echo "</select>";
echo "</table>";
echo "</center>";


//////////////////////////////////////////





mysqli_close($conn);



//header("Location:index.php");

?>

</body></html>