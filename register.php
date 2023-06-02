<?php
include 'config.php';


session_start();

if (isset($_SESSION['username'])) {
  header("Location: index.php");
}


if (isset($_POST['register_btn'])) {
$username = $_POST['username'];
$email = $_POST['email'];
  $password = $_POST['password'];
  $rpassword = $_POST['rpassword'];
  
//   $uppercase    = preg_match('@[A-Z]@', $password);
// 	$lowercase    = preg_match('@[a-z]@', $password);
// 	$number       = preg_match('@[0-9]@', $password);
// 	$specialchars = preg_match('@[^\w]@', $password);



      if ($password == $rpassword) {
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $sql);
  if (!$result->num_rows > 0) {
          if(isset($_POST['user_type'])) {
              $user_type = $_POST['user_type'];
    $sql = "INSERT INTO users (username, email,user_type, password)
        VALUES ('$username', '$email','$user_type' ,'$password')";
    $result = mysqli_query($conn, $sql);

    // if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) > 8){
	// 	array_push($errors, "Password is week");
    //   }

    // if (preg_match("#.^(?=.{8,20})(?=.[a-z])(?=.[A-Z])(?=.[0-9]).*$#", $password_1)){
	// 	array_push($errors, "The  password is  week");

	// }
  
          }
          
      else {
 $sql="INSERT INTO users (username, email, user_type, password) 
 VALUES('$username', '$email', 'user', '$password')";
$result = mysqli_query($conn, $sql);
  
header('location:index.php');	
}
}

  if ($result) {
    
    $username = "";
    $email = "";
    $_POST['password'] = "";
    $_POST['rpassword'] = "";
echo "<script>alert('Registration not Completed')</script>";
    

} else {
    echo "<script>alert('Registration not Complet')</script>";
}
} 
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style-register.css">
    <title>VEGGIE-Register</title>
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

    </style>
</head>
<body>
<body>
<div id="login-form">
  <h2>Register</h2>
  <form id="register-form"  method="POST">
    <p>
    <input type="text"  name="username" placeholder="Username" required autocomplete="off">
    </p>
    <p>
    <input type="email"  name="email" placeholder="Email Address" required autocomplete="off">
    </p>
    <p>
    <input type="password" name="password" placeholder="Password" required autocomplete="off">
    </p>
    <p>
    <input type="password" name="rpassword" placeholder="Confirm Password" required autocomplete="off">
    </p>
    <p>
    <input type="submit" name=register_btn value="Register">
    </p>
  </form>
  <div id="create-account">
    <p>Have already an account ?  <a href="index.php">Login</a><p>
  </div>
</div>  

</body>
</html>