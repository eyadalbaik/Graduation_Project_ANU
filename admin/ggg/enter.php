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







$user=$_SESSION['id'];

if(count($_POST)>0){
  if($_POST['type']==1){
      $id=$_POST['id'];
      $item=$_POST['item'];
      // $type=$_POST['user_type'];
      $quantity=$_POST['quantity'];
      // $password=$_POST['password'];
      // $code=$_POST['code'];

      

      
      $sql = "INSERT INTO `item_num`( `item`,`quantity`,user) " .
     "VALUES ('$item','$quantity','$user')";
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

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Farmer page</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="index.js"></script>


<style>
   .custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
  width: 100%;

}

.select-selected {
  background-color: #0F9D58;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: #0F9D58;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>

</head>


<body>


<div class="container">


<p id="success"></p>

<div class="table-wrapper">

<div class="table-title">

<div class="row">

<div class="col-sm-6">
<h2>Enter your quantities</h2>

</div>

<div class="col-sm-6">

<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add Item</span></a>


</div>

</div>

</div>

<table class="table table-striped table-hover">

<thead>

<tr>

<th>#</th>
<th>Item</th>
<th>Price</th>
<th>ACTION</th>   
 </tr>
</thead>

<tbody>

 

<?php

$result = mysqli_query($conn,"SELECT * FROM item_num");

$i=1;

while($row = mysqli_fetch_array($result)) {

?>

<tr id="<?php echo $row["id"]; ?>">


<td><?php echo $i; ?></td>

<td><?php echo $row["item"]; ?></td>

<td><?php echo $row["quantity"]; ?></td>

   

<td>

<a href="#editEmployeeModal" class="edit" data-toggle="modal">

<i class="material-icons update" data-toggle="tooltip"

data-id="<?php echo $row["id"]; ?>"

data-name="<?php echo $row["item"]; ?>"



title="Edit"></i>

</a>

<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip"

 title="Delete"></i></a>

</td>

</tr>

<?php

$i++;

}

?>

</tbody>

</table>

</div>

</div>



<!-- Add Users -->

<div id="addEmployeeModal" class="modal fade">

<div class="modal-dialog">

<div class="modal-content">

<form id="user_form">

<div>   

<h4 class="modal-title">Add Total Quantity</h4>

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>

<div class="modal-body"> 

<div class="form-group">

<label>NAME OF ITEM</label>

<input type="text" id="item" name="item" class="form-control" required autocomplete="off">

</div>

 <div class="form-group">

<label>Quantity</label>

<input type="email" id="quantity" name="quantity" class="form-control" required autocomplete="off">

</div> 

<!-- 
<div class="form-group">

<label>Password</label>

<input type="password" id="phone" name="password" class="form-control" required>

</div>

<div class="form-group">

<label>User Type</label>

<input type="text" id="phone" name="type" class="form-control" required>

</div>  -->

</div>   

</div>

<div class="modal-footer">

<input type="hidden" value="1" name="type">

<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">

<button type="button" class="btn btn-success" id="btn-add">Add Item</button>

</div>

</form>

</div>

</div>

</div>


<!-- /// Add Users -->

















<!-- Edit  -->

<div id="editEmployeeModal" class="modal fade">

<div class="modal-dialog">

<div class="modal-content">

<form id="update_form">

<div class="modal-header">   

<h4 class="modal-title">Edit Item</h4>

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>

<div class="modal-body">

<input type="hidden" id="id_u" name="id" class="form-control" required>  

<div class="form-group">

<label>NAME OF ITEM</label>
<input type="text" id="item" name="item" class="form-control" required autocomplete="off">
</div>
<div class="form-group">
<label>Quantity</label>
<input type="email" id="quantity" name="quantity" class="form-control" required autocomplete="off">
</div>

<!-- <div class="form-group">
<label>Password</label>
<input type="password" id="email_u" name="password" class="form-control" required>
</div> -->


<div class="modal-footer">
<input type="hidden" value="2" name="type">

<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">

<button type="button" class="btn btn-info" id="update" >Update</button>

</div>

</form>

</div>

</div>

</div>

</body>

</html>