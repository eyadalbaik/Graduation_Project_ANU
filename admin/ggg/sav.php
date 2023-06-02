<?php


$servername = "localhost";

$username = "root";

$password = "";
$dbname = "csc";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$result = mysqli_query ( $conn,"SELECT * FROM `item_num` where user=".$_SESSION['id']);



if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}









if(count($_POST)>0){
  if($_POST['type']==1){
      $id=$_POST['id'];
      $item=$_POST['item'];
      // $type=$_POST['user_type'];
      $quantity=$_POST['quantity'];
      // $password=$_POST['password'];
      // $code=$_POST['code'];

      

      
      $sql = "INSERT INTO `item_num`( `item`,`quantity`) " .
     "VALUES ('$item','$quantity')";
      if (mysqli_query($conn, $sql)) {
          echo json_encode(array("statusCode"=>200));
      }
      else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
  }
}
if(count($_POST)>0){
  if($_POST['type']==2){
      $id=$_POST['id'];
      $item=$_POST['item'];
      $quantity=$_POST['quantity'];
      // $password=$_POST['password'];
      // $code=$_POST['code'];


      
      $sql = "UPDATE `item_num` SET `item`='$item',`quantity`='$quantity'  WHERE id=$id";
      if (mysqli_query($conn, $sql)) {
          echo json_encode(array("statusCode"=>200));
      }
      else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
  }
}
if(count($_POST)>0){

  if($_POST['type']==3){

      $id=$_POST['id'];
      $sql = "DELETE FROM `item_num` WHERE id=$id ";
      if (mysqli_query($conn, $sql)) {

          echo $id;
      }
      else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
  }
}



?>