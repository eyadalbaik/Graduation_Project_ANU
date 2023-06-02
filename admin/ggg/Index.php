<?php



session_start();



include 'bd.php';
include 'save.php';









$sql195 = "SELECT id,username,email,user_type 
   FROM users where id = ".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

//$sql2 = "SELECT user_id,fname,job,details,photo3 FROM customers where user_id=".$_SESSION['id'];

$result195 = mysqli_query($conn, $sql195);

$row195 = mysqli_fetch_assoc($result195);


echo "<center>.<h4>Welcome : " .$row195['username']."</center></h4> ";
echo "</br>";

/////////////////////////////////////////////////////////

// $sql2 = "SELECT max(id) FROM password";

// $result2 = mysqli_query($conn, $sql2);

// $row2 = mysqli_fetch_assoc($result2);

//echo $result;
//echo "</br>";
//echo "<table>";

//echo "</br>test7</br>";
//mysqli_query($conn, $sql);
//if (mysqli_num_rows($result2) > 0) {
  //echo "</br>h7</br>";
    // output data of each row
    //while($row2 = mysqli_fetch_assoc($result2)) {
      //echo "</br>h8</br>";

//mysqli_fetch_assoc($result2);
	// $_SESSION['password1'] = $row195['id'];
  //   $_SESSION['password2'] = $row195['user_id'];

//}

//}



?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>VEGGIE - Farmer </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="index.js"></script>

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
<h2>Item  Type</h2>

</div>

<div class="col-sm-6">
<a  href="../logout.php" class="btn btn-danger" data-toggle="modal">&nbsp &nbsp<img src="../../image/box-arrow-right.svg"> <span>Logout</span></a>
<a  href="../../chat/index.php" class="btn btn-warning" data-toggle="modal">&nbsp &nbsp<img src="../../image/chat.svg"> <span>Chat</span></a>
<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add Item</span></a>
<!-- <a  href="http://localhost/project%20-%20Copy/admin/ggg/enter.php" class="btn btn-success" data-toggle="modal"> <span>Enter your quantities</span></a> -->



</div>

</div>

</div>

<table class="table table-striped table-hover">

<thead>

<tr>

<th>#</th>
<th>Item</th>
<th>Description</th>   
<th>Quantity / Ton</th> 
<th>Sales in Month</th> 
<!-- <th>Sales in Year</th>   -->
<th>Price</th>
<th>Status</th>
 </tr>
</thead>

<tbody>

 

<?php

$result = mysqli_query($conn,"SELECT * FROM ve where user=".$_SESSION['id']);

$i=1;

while($row = mysqli_fetch_array($result)) {

?>

<tr id="<?php echo $row["id"]; ?>">

<td><?php echo $i; ?></td>

<td><?php echo $row["name"]; ?></td>

<td><?php echo $row["description"]; ?></td>

<td><?php echo $row["quantity"] . " Ton " ; ?></td>

<td><?php echo  $row["sales"]; ?></td>

<td><?php echo  $row["price"]." JOD "; ?></td>

<td><?php echo  $row["statuss"]   ;?>



  


<a href="#editEmployeeModal" class="edit" data-toggle="modal">

<i class="material-icons update" data-toggle="tooltip"

data-id="<?php echo $row["id"]; ?>"

data-name="<?php echo $row["name"]; ?>"




title="Edit"></i>

</a>
<!-- 
<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip"

 title="Delete"></i></a> -->

</td>


<!-- <td>
<a  href="#" class="btn btn-success" data-toggle="modal"> <span>Add To Cart</span></a>
</td> -->



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

<h4 class="modal-title">Add Item</h4>

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>

<div class="modal-body"> 

<div class="form-group">

<label>NAME OF ITEM</label>

<input type="text" id="name" name="name" class="form-control" required autocomplete="off">

</div>

 <div class="form-group">

<label>Description</label>

<input type="email" id="description" name="description" class="form-control" required autocomplete="off">

</div> 


<div class="form-group">

<label>Quantity / Ton</label>

<input type="email" id="quantity" name="quantity" class="form-control" required autocomplete="off">

</div> 

<div class="form-group">

<label>Price</label>

<input type="email" id="price" name="price" class="form-control" required autocomplete="off">

</div> 


<div class="modal-body"> 

<div class="form-group">

<label>Status</label>

<input type="text" id="statuss" name="statuss" class="form-control" required autocomplete="off">

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

<button type="button" class="btn btn-success" id="btn-add" onclick="add()">Add Item</button>

</div>

</form>

</div>

</div>

</div>


<script>

function add(){

 // alert("Add Item");


  var name=$("#name").val();

  var desc=$("#description").val();

  var quant=$("#quantity").val();


  var price=$("#price").val();


  var stat=$("#statuss").val();

            //var email=$("#email").val();
//var name=document.getElementById("phone").value();
$.ajax({
               url:'insert.php',
               method:'POST',
               data:{
                   name:name,
                   desc:desc,
                   quant:quant,
                   price:price,
                   stat:stat,
                    //email:email,
               },
              success:function(data){
                // alert(data);
             }
           });

         location.reload();
           //alert(name);
}



</script>

<!-- /// Add Users -->

















<!-- Edit  -->

<div id="editEmployeeModal" class="modal fade">

<div class="modal-dialog">

<div class="modal-content">

<form id="update_form" action="update.php">
<!-- <form action="/action_page.php"></form> -->
<div class="modal-header">   

<h4 class="modal-title">Edit Status</h4>

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>

<div class="modal-body">

<input type="hidden" id="id_u" name="id" class="form-control" required>  

<div class="form-group">


<?php
// $_SESSION['update']=$row["id"];
?>


<!-- <label>NAME OF ITEM</label>
<input type="text" id="name" name="name" class="form-control" required autocomplete="off">
</div>

<div class="form-group">
<label>Price</label>
<input type="text" id="price" name="price" class="form-control" required autocomplete="off">
</div> -->

<label>Status</label>
<input type="text" id="statuss" name="statuss" class="form-control" required autocomplete="off">
</div>



<!-- <div class="form-group">
<label>Password</label>
<input type="password" id="email_u" name="password" class="form-control" required>
</div> -->


<div class="modal-footer">
<input type="hidden" value="2" name="type">

<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">

<button type="submit" class="btn btn-info" id="update" onclick="update()" >Update</button>

</div>

</form>

</div>

</div>

</div>

<script>
<?php

///////////////////////////////////////////////////


function update(){
//$(document).ready(function(){
 // $("#users").change(function(){

     
    // alert("The text has been changed.");


    //var name=document.getElementById("#cars").value();

    //var name =x;
    //document.getElementById('img')
    //$("#img").val();
    //alert(name);
    //var name=$select.value;
    //var name=document.getElementById("#types").value;
          //  var name=$("#types").val();
           //alert(name);
          //$_SESSION['food']=$("#types").val();
           
          //function showUser(str) {
    // if (str == "") {
    //     document.getElementById("txtHint").innerHTML = "";
    //     return;
    // } else { 
    //     if (window.XMLHttpRequest) {
    //         // code for IE7+, Firefox, Chrome, Opera, Safari
    //         xmlhttp = new XMLHttpRequest();
    //     } else {
    //         // code for IE6, IE5
    //         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    //     }
    //     xmlhttp.onreadystatechange = function() {
    //         if (this.readyState == 4 && this.status == 200) {
    //             document.getElementById("txtHint").innerHTML = this.responseText;
    //         }
    //     };
    //     xmlhttp.open("GET","foods.php?q="+name,true);
    //     xmlhttp.send();
    // }
}
     
          

// $.ajax({
//                url:'foods.php',
//                method:'POST',
//                data:{
//                    name:name,
//                     //email:email,
//                },
//               success:function(data){
//                 //alert(data);
//                 //$("#foods").val()=data;
//                 //document.getElementById("#foods")=data;
//                 document.getElementById("txtHint").innerHTML = this.responseText;
//              }
//            });

//  });
// });
// alert($_SESSION['food']);
// location.reload();
// }
       // };



/////////////////////////////////////////////////////


?>
</script>


</body>

</html>
