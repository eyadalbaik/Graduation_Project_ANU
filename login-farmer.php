<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seller Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="login-farmer-style.css">
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

.ph {
            border-radius: 50px;
            transition: 0.5s;
            filter: grayscale(65%);


}
.ph:hover {
            margin-top: -10px;
            transition: 0.5s;
            filter: grayscale(0);
            border-radius: 25px;

   
}
</style>
</head>
<body>

    <div class="main" style="padding-top: 90px;">

        <!-- Sign up form -->

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                    <figure><img src="image/farphot.jpg" alt="sing up image" class="ph"></figure>
                        <p class="signup-image-link">don't have an account <a href="register-farmer.php" class="a-r">create now</a></p>
                        
                        
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">SELLER LOGIN</h2>
                        <form  class="register-form" id="login-form" action="bb2.php" method="post">
                            <div class="alert alert-danger"><h4 id="e_msg"></h4></div>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Seller Email" required />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required />
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="login_admin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>