<html>
	<head>
		<style>
			          #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  text-align: center;
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

		</style>
	</head>
<body>
<center>
<br>
<h3>Welcome to the <span style="color:orange"><b> VEGGIE <b></span> website
    <br>
 This page allows you to know the statistics of vegetables on this site. 
</h3>




<br>
<?php

//servername
$servername = "localhost";
//username
$username = "root";
//empty password
$password = "";
//sravan is the database name
$dbname = "csc";

// Create connection by passing these connection parameters
$conn = new mysqli($servername, $username, $password, $dbname);

//sql query to find total strength with respect to the department
$sql = "SELECT SUM(sales),code,SUM(quantity) FROM ve GROUP BY code";
$result = $conn->query($sql);
//display data on web page
echo "<table id='customers'>
<tr class='tr'>
<td>  Item </td>
<td>  Quantity in this Month  </td>
<td>  Sales in this Month  </td>
<td>  Quantity  in this Year  </td>
<td>  Sales  in this Year  </td>
</tr>";
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>" . $row['code']. " </td>";
	echo "<td>". $row['SUM(quantity)']. "</td>";
  echo "<td>" . $row['SUM(sales)']. " </td>";
	echo "<td> ". $row['SUM(quantity)']. "</td>";
  echo "<td>" . $row['SUM(sales)']. " </td>";
	echo "</tr>";

}

//close the connection
echo "</table>";
$conn->close();
?>
</center>
</body>
</html>
