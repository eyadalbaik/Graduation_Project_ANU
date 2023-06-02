<?php
include 'bd.php';

// if(count($_POST)>0){
//     if($_POST['type']==1){
//         $id=$_POST['id'];
//         $username=$_POST['username'];
//         $type=$_POST['user_type'];
//         $email=$_POST['email'];
//         $password=$_POST['password'];
        

        
//         $sql = "INSERT INTO `users`( `username`,`user_type`, `email`,  `password`) 
//         VALUES ('$username','$type','$email','$password')";
//         if (mysqli_query($conn, $sql)) {
//             echo json_encode(array("statusCode"=>200));
//         }
//         else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }
//         mysqli_close($conn);
//     }
// }
// if(count($_POST)>0){
//     if($_POST['type']==2){
//         $id=$_POST['id'];
//         $username=$_POST['username'];
//         $email=$_POST['email'];
//         $password=$_POST['password'];

       
//         $sql = "UPDATE `users` SET `username`='$username',`email`='$email',`password`='$password'  WHERE id=$id";
//         if (mysqli_query($conn, $sql)) {
//             echo json_encode(array("statusCode"=>200));
//         }
//         else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }
//         mysqli_close($conn);
//     }
// }
// if(count($_POST)>0){

//     if($_POST['type']==3){

//         $id=$_POST['id'];
//         $sql = "DELETE FROM `users` WHERE id=$id ";
//         if (mysqli_query($conn, $sql)) {

//             echo $id;
//         }
//         else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }
//         mysqli_close($conn);
//     }
// }




// if(count($_POST)>0){
//     if($_POST['user_type']==4){
//         $id=$_POST['id'];
//         $sql = "DELETE FROM users WHERE id in ($id)";
//         if (mysqli_query($conn, $sql)) {
//             echo $id;
//         }
//         else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }
//         mysqli_close($conn);
//     }
// }




//  الاول 




if(count($_POST)>0){
    if($_POST['type']==1){
        $id=$_POST['id'];
        $name=$_POST['name'];
        // $type=$_POST['user_type'];
        // $password=$_POST['password'];
        $description=$_POST['description'];
        $quantity=$_POST['quantity'];
        $price=$_POST['price'];
        $statuss=$_POST['statuss'];
        $user=$_SESSION['id'];


        

        
        $sql = "INSERT INTO `ve`( `name`,`description`,`quantity`,`price`,`statuss`,'user') " .
       "VALUES ('$name','$description','$quantity','$price','$statuss','$user')";
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
        // $name=$_POST['name'];
        // $price=$_POST['price'];
        // $password=$_POST['password'];
        $statuss=$_POST['statuss'];


    //    `name`='$name',`price`='$price',
        $sql = "UPDATE `ve` SET `statuss`='$statuss'  WHERE id=$id";
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
        $sql = "DELETE FROM `ve` WHERE id=$id ";
        if (mysqli_query($conn, $sql)) {

            echo $id;
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}













// الجدول الثاني 




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