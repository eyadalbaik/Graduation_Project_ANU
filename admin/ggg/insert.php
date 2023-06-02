<?php
//include("conect.php");



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

echo '</br>test1</br>';


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


echo "</br>test2</br>";

//$sql = "INSERT INTO
//users (name,job,details) values ('.$_POST[name].','Upadhyay','2020-06-26');";

$sql = "INSERT INTO ve(name,price,description,quantity,statuss,user,code)  
VALUES('".$_POST['name']."',".$_POST['price'].",'".$_POST['desc']."','".$_POST['quant']."','".$_POST['stat']."',".$_SESSION['id'].",'".$_POST['name']."')";
//INSERT INTO users(name,job,details)  VALUES('','','');

$result = mysqli_query($conn, $sql);

echo "</br>test3</br>";
echo $_SESSION['id'];
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

// $sql2 = "SELECT max(user_id) FROM customers";

// $result2 = mysqli_query($conn, $sql2);

//echo $result;
//echo "</br>";
//echo "<table>";

//echo "</br>test7</br>";
// //mysqli_query($conn, $sql);
// if (mysqli_num_rows($result2) > 0) {
//   //echo "</br>h7</br>";
//     // output data of each row
//     while($row2 = mysqli_fetch_assoc($result2)) {
//       //echo "</br>h8</br>";

// //mysqli_fetch_assoc($result2);
// 	$_SESSION['id'] = $row2["max(user_id)"];

// }

// }
///////////////////////////////////


//echo $_SESSION['id'];
//echo $row2["max(user_id)"];

////////////////////////////////////////




// $sql10 = "update password set user_id=".$_SESSION['id']." where id=".$_SESSION['password1'];

// $result10 = mysqli_query($conn, $sql10);


// echo "</br>test4</br>";




/////////////////////////////////////////////////////


// $home="home";
// $count1=1;
// $sql33 = "INSERT INTO header(user_id,type,name)  VALUES(".$_SESSION['id'].",".$count1.",'".$home."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result33 = mysqli_query($conn, $sql33);



// $about="about";
// $count2=2;
// $sql44 = "INSERT INTO header(user_id,type,name)  VALUES(".$_SESSION['id'].",".$count2.",'".$about."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result44 = mysqli_query($conn, $sql44);



// $service="service";
// $count3=3;
// $sql55 = "INSERT INTO header(user_id,type,name)  VALUES(".$_SESSION['id'].",".$count3.",'".$service."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result55 = mysqli_query($conn, $sql55);


// $about="contact";
// $count4=4;
// $sql66 = "INSERT INTO header(user_id,type,name)  VALUES(".$_SESSION['id'].",".$count4.",'".$about."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result66 = mysqli_query($conn, $sql66);


//////////////////////////////////////////////////////


// $name = "title";
// $detail = "Your data for your website";
// $sql77 = "INSERT INTO home(user_id,name,details)  VALUES(".$_SESSION['id'].",'".$name."','".$detail."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result77 = mysqli_query($conn, $sql77);



///////////////////////////////////////////////////////////



//////////////////////////////////////////////////////


// $c1= "rgb(96, 210, 147)";
// $c2= "rgb(16, 112, 59)";
// $note = "yes";

// $sql88 = "INSERT INTO color(user_id,c1,c2,note)  VALUES(".$_SESSION['id'].",'".$c1."','".$c2."','".$note."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result88 = mysqli_query($conn, $sql88);



// ///////////////////////////////////////////////////////////




// //////////////////////////////////////////////////////


// $c22= "rgb(14, 52, 160)";
// $c3= "rgb(0, 36, 79)";
// $note2 = "no";

// $sql999 = "INSERT INTO color(user_id,c1,c2,note)  VALUES(".$_SESSION['id'].",'".$c22."','".$c3."','".$note2."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result999= mysqli_query($conn, $sql999);



// ///////////////////////////////////////////////////////////




// //////////////////////////////////////////////////////


// $c4= "rgb(245, 47, 87)";
// $c5= "rgb(158, 0, 2)";


// $sql555= "INSERT INTO color(user_id,c1,c2,note)  VALUES(".$_SESSION['id'].",'".$c4."','".$c5."','".$note2."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $result555= mysqli_query($conn, $sql555);



// ///////////////////////////////////////////////////////////




// //////////////////////////////////////////////////////


// $c6= "rgb(96, 210, 147)";
// $c7= "rgb(16, 112, 59)";


// $sql666 = "INSERT INTO color(user_id,c1,c2,note)  VALUES(".$_SESSION['id'].",'".$c6."','".$c7."','".$note2."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul666 = mysqli_query($conn, $sql666);



// ///////////////////////////////////////////////////////////

// $img1 = "img/e.png";
// $sql61 = "INSERT INTO photo(user_id,path)  VALUES(".$_SESSION['id'].",'".$img1."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul61 = mysqli_query($conn, $sql61);



// $img2 = "img/s.png";
// $sql62= "INSERT INTO photo(user_id,path)  VALUES(".$_SESSION['id'].",'".$img2."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul62 = mysqli_query($conn, $sql62);




// $img3 = "img/f.png";
// $sql63 = "INSERT INTO photo(user_id,path)  VALUES(".$_SESSION['id'].",'".$img3."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul63 = mysqli_query($conn, $sql63);



// $img4 = "img/g.png";
// $sql64= "INSERT INTO photo(user_id,path)  VALUES(".$_SESSION['id'].",'".$img4."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul64 = mysqli_query($conn, $sql64);



// $img5 = "img/e.png";
// $sql65= "INSERT INTO photo(user_id,path)  VALUES(".$_SESSION['id'].",'".$img5."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul65 = mysqli_query($conn, $sql65);



// $img6 = "img/s.png";
// $sql66= "INSERT INTO photo(user_id,path)  VALUES(".$_SESSION['id'].",'".$img6."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul66 = mysqli_query($conn, $sql66);



// $img7 = "img/f.png";
// $sql67 = "INSERT INTO photo(user_id,path)  VALUES(".$_SESSION['id'].",'".$img7."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul67 = mysqli_query($conn, $sql67);


// $img8 = "img/g.png";
// $sql68 = "INSERT INTO photo(user_id,path)  VALUES(".$_SESSION['id'].",'".$img8."')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul68 = mysqli_query($conn, $sql68);






///////////////////////////////////////////////////////////////



// $font = "Brush Script MT,cursive";
// $sql79 = "INSERT INTO font(user_id,name,note)  VALUES(".$_SESSION['id'].",'".$font."','yes')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul79 = mysqli_query($conn, $sql79);




// $font2 = "Copperplate,Papyrus,fantasy";
// $sql89 = "INSERT INTO font(user_id,name,note)  VALUES(".$_SESSION['id'].",'".$font2."','no')";
// //INSERT INTO users(name,job,details)  VALUES('','','');

// $resul89 = mysqli_query($conn, $sql89);

///////////////////////////////////////////////////////////////






mysqli_close($conn);




// echo $_SESSION['id'];
// echo $_SESSION['password'];
////////////////////////////////////////////


//header('third.php');

//header("Location:page4.php");




?>
</body>
</html>
