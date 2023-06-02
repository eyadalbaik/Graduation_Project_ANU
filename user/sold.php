<?php
//include("conect.php");

error_reporting(0);

    session_start();



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


// if(isset($_POST["submit"])){
// 	$file=$_FILES["file"];

// 	$filename=$_FILES["file"]["name"];
// 		$filetmpname=$_FILES["file"]["tmp_name"];
// 			$filesize=$_FILES["file"]["size"];
// 				$fileerror=$_FILES["file"]["error"];
// 					$filetype=$_FILES["file"]["type"];

// 					$fileext=explode(".",$filename);
// 					$fileactext=strtolower(end($fileext));

// 					$allowed=array('jpg','jpeg','png','pdf');


// 					if(in_array($fileactext,$allowed)){

// 						if($fileerror===0){

// 							$filenamenew=uniqid('',true).".".$fileactext;
// 							$filedestination='videos/'.$filenamenew;
// 							move_uploaded_file($filetmpname,$filedestination);







// 							}
// 						}

// }


//echo "</br>test2</br>";



$sql93 = "select code,quantity,user from ve where id = ".$_POST['ve']; 
//VALUES('".$_POST['code']."','".$_POST['price']."',".$_SESSION['id'].",".$_SESSION['id'].")";
//INSERT INTO users(name,job,details)  VALUES('','','');

$result93 = mysqli_query($conn, $sql93);

$row93 = mysqli_fetch_assoc($result93);



//if (mysqli_num_rows($result5) > 0) {
    //echo "</br>h7</br>";
      // output data of each row
      //while($row93 = mysqli_fetch_assoc($result93)) {
        //echo "</br>h8</br>";
      // echo "<tr>";
      //	echo "<td>".$row5["id"]."</td>"."<td>".$row5["email"]."</td>".
  //"<td>".$row5["phone"]."</td>".
  //"<td>".$row5["address"]."</td>".
  //"<td>".$row5["street"]."</td>".
  //"<td>".$row5["code"]."</td>".
  //"<td>".$row5["country"]."</td>".
  //"<td>".$row5["city"]."</td>".
      //	"<td>".$row5["details"]."</td>"." " . "<br>";
         
//   echo "<textarea class='h2'>Location</textarea>";
//   echo  "<textarea  class='ff' id='email'>".$row5['address']."</textarea>";
//   echo "<textarea  class='h2'>Phone</textarea>";
//   echo "<textarea  class='ff' id='phone'>".$row5['phone']."</textarea>";
  
  
  //echo "</tr>";
  
  //}
  
  //}

//$sql = "INSERT INTO
//users (name,job,details) values ('.$_POST[name].','Upadhyay','2020-06-26');";

$sql = "INSERT INTO sold(item,quantity,user,buy)  
VALUES('".$row93['code']."',".$row93['quantity'].",".$row93['user'].",".$_SESSION['id'].")";
//INSERT INTO users(name,job,details)  VALUES('','','');

$result = mysqli_query($conn, $sql);

//echo "</br>test3</br>";
//echo $_POST["name"];
//echo $_POST['name'];
//echo $_POST["job"];
//echo $_POST['industry'];
//echo $_POST["details"];
//echo $_POST['about'];


//$sql2 = "select max(user_id) from customers";
//INSERT INTO users(name,job,details)  VALUES('','','');

//$result2 = mysqli_query($conn, $sql2);


/////////////////////////////////////

// $sql2 = "SELECT max(id) FROM password";

// $result2 = mysqli_query($conn, $sql2);

//echo $result;
//echo "</br>";
//echo "<table>";

//echo "</br>test7</br>";
//mysqli_query($conn, $sql);
// if (mysqli_num_rows($result2) > 0) {
//   //echo "</br>h7</br>";
//     // output data of each row
//     while($row2 = mysqli_fetch_assoc($result2)) {
//       //echo "</br>h8</br>";

// //mysqli_fetch_assoc($result2);
// 	$_SESSION['password1'] = $row2["max(id)"];

// }

// }
///////////////////////////////////



// $sql33 = "SELECT user_id FROM password where id = ".$_SESSION['password1'];

// $result33 = mysqli_query($conn, $sql33);

//echo $result;
//echo "</br>";
//echo "<table>";

//echo "</br>test7</br>";
//mysqli_query($conn, $sql);
// if (mysqli_num_rows($result33) > 0) {
//   //echo "</br>h7</br>";
//     // output data of each row
//     while($row33 = mysqli_fetch_assoc($result33)) {
//       //echo "</br>h8</br>";

// //mysqli_fetch_assoc($result2);
// 	$_SESSION['password2'] = $row33['user_id'];

// }

// }


//echo $_SESSION['id'];
//echo $_SESSION['page'];
//echo $row2["max(user_id)"];

////////////////////////////////////////



//echo "</br>test4</br>";




/////////////////////////////////////////////////////


// $home="home";
// $count1=1;
// $sql33 = "INSERT INTO header(user_id,type,name,page)  
// VALUES(".$_SESSION['id'].",".$count1.",'".$home."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result33 = mysqli_query($conn, $sql33);



// $about="about";
// $count2=2;
// $sql44 = "INSERT INTO header(user_id,type,name,page)   
//     VALUES(".$_SESSION['id'].",".$count2.",'".$about."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result44 = mysqli_query($conn, $sql44);



// $service="service";
// $count3=3;
// $sql55 = "INSERT INTO header(user_id,type,name,page) 
//      VALUES(".$_SESSION['id'].",".$count3.",'".$service."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result55 = mysqli_query($conn, $sql55);


// $about="contact";
// $count4=4;
// $sql66 = "INSERT INTO header(user_id,type,name,page)  
//     VALUES(".$_SESSION['id'].",".$count4.",'".$about."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result66 = mysqli_query($conn, $sql66);


// //////////////////////////////////////////////////////


// $name = "title";
// $detail = "Your data for your website";
// $sql77 = "INSERT INTO home(user_id,name,details,page) 
//      VALUES(".$_SESSION['id'].",'".$name."','".$detail."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result77 = mysqli_query($conn, $sql77);



// ///////////////////////////////////////////////////////////



// //////////////////////////////////////////////////////


// $c1= "rgb(96, 210, 147)";
// $c2= "rgb(16, 112, 59)";
// $note = "yes";

// $sql88 = "INSERT INTO color(user_id,c1,c2,note,page)
//      VALUES(".$_SESSION['id'].",'".$c1."','".$c2."','".$note."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result88 = mysqli_query($conn, $sql88);



// ///////////////////////////////////////////////////////////




// //////////////////////////////////////////////////////


// $c22= "rgb(14, 52, 160)";
// $c3= "rgb(0, 36, 79)";
// $note2 = "no";

// $sql999 = "INSERT INTO color(user_id,c1,c2,note,page) 
//    VALUES(".$_SESSION['id'].",'".$c22."','".$c3."','".$note2."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result999= mysqli_query($conn, $sql999);



// ///////////////////////////////////////////////////////////




// //////////////////////////////////////////////////////


// $c4= "rgb(245, 47, 87)";
// $c5= "rgb(158, 0, 2)";


// $sql555= "INSERT INTO color(user_id,c1,c2,note,page) 
//   VALUES(".$_SESSION['id'].",'".$c4."','".$c5."','".$note2."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result555= mysqli_query($conn, $sql555);



// ///////////////////////////////////////////////////////////




// //////////////////////////////////////////////////////


// $c6= "rgb(96, 210, 147)";
// $c7= "rgb(16, 112, 59)";


// $sql666 = "INSERT INTO color(user_id,c1,c2,note,page)  
//    VALUES(".$_SESSION['id'].",'".$c6."','".$c7."','".$note2."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul666 = mysqli_query($conn, $sql666);



// ///////////////////////////////////////////////////////////

// $img1 = "img/e.png";
// $sql61 = "INSERT INTO photo(user_id,path,page) 
//   VALUES(".$_SESSION['id'].",'".$img1."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul61 = mysqli_query($conn, $sql61);



// $img2 = "img/s.png";
// $sql62= "INSERT INTO photo(user_id,path,page) 
//    VALUES(".$_SESSION['id'].",'".$img2."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul62 = mysqli_query($conn, $sql62);




// $img3 = "img/f.png";
// $sql63 = "INSERT INTO photo(user_id,path,page) 
//     VALUES(".$_SESSION['id'].",'".$img3."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul63 = mysqli_query($conn, $sql63);



// $img4 = "img/g.png";
// $sql64= "INSERT INTO photo(user_id,path,page)  
//  VALUES(".$_SESSION['id'].",'".$img4."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul64 = mysqli_query($conn, $sql64);



// $img5 = "img/e.png";
// $sql65= "INSERT INTO photo(user_id,path,page)  
//     VALUES(".$_SESSION['id'].",'".$img5."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul65 = mysqli_query($conn, $sql65);



// $img6 = "img/s.png";
// $sql66= "INSERT INTO photo(user_id,path,page)  
//     VALUES(".$_SESSION['id'].",'".$img6."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul66 = mysqli_query($conn, $sql66);



// $img7 = "img/f.png";
// $sql67 = "INSERT INTO photo(user_id,path,page)  
//     VALUES(".$_SESSION['id'].",'".$img7."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul67 = mysqli_query($conn, $sql67);


// $img8 = "img/g.png";
// $sql68 = "INSERT INTO photo(user_id,path,page) 
//     VALUES(".$_SESSION['id'].",'".$img8."',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul68 = mysqli_query($conn, $sql68);






// ///////////////////////////////////////////////////////////////



// $font = "Brush Script MT,cursive";
// $sql79 = "INSERT INTO font(user_id,name,note,page)  
// VALUES(".$_SESSION['id'].",'".$font."','yes',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul79 = mysqli_query($conn, $sql79);




// $font2 = "Copperplate,Papyrus,fantasy";
// $sql89 = "INSERT INTO font(user_id,name,note,page) 
//    VALUES(".$_SESSION['id'].",'".$font2."','no',".$_SESSION['page'].")";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul89 = mysqli_query($conn, $sql89);

///////////////////////////////////////////////////////////////
$total=0;
$sql55 = "SELECT item,quantity
FROM sold where buy=".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

$result55 = mysqli_query($conn, $sql55);
echo "<center>";
echo "<Table>";
if (mysqli_num_rows($result55) > 0) {
    //echo "</br>h7</br>";
      // output data of each row
      while($row55 = mysqli_fetch_assoc($result55)) {
        //echo "</br>h8</br>";
      // echo "<tr>";
      //	echo "<td>".$row5["id"]."</td>"."<td>".$row5["email"]."</td>".
  //"<td>".$row5["phone"]."</td>".
  //"<td>".$row5["address"]."</td>".
  //"<td>".$row5["street"]."</td>".
  //"<td>".$row5["code"]."</td>".
  //"<td>".$row5["country"]."</td>".
  //"<td>".$row5["city"]."</td>".
      //	"<td>".$row5["details"]."</td>"." " . "<br>";
         
//   echo "<textarea class='h2'>Location</textarea>";
//   echo  "<textarea  class='ff' id='email'>".$row5['address']."</textarea>";
//   echo "<textarea  class='h2'>Phone</textarea>";
//   echo "<textarea  class='ff' id='phone'>".$row5['phone']."</textarea>";
  


echo "<tr>";

echo "<td>".$row55["item"]."</td>";
echo "<td>".$row55["quantity"]."</td>";

echo "</tr>";
  $total=$total+$row55["quantity"];
  //echo "</tr>";
  
  }
  
  }

echo "</Table>";

echo "</br>";
echo "</br>";

echo "Total For User=";
echo $total;

echo "</br>";
echo "</br>";



$sql95 = "SELECT sum(quantity) as quant FROM sold ";

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

$result95 = mysqli_query($conn, $sql95);

$row95 = mysqli_fetch_assoc($result95);

echo "Total For All Users=";
// echo $total;
echo $row95['quant'];
echo "</center>";


/////////////////////////////////////////////


mysqli_close($conn);





////////////////////////////////////////////


//header('third.php');

//header("Location:before2.php");




?>
</body>
</html>
