<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEGGIE - Users</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

<!-- 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> VEGGIE </a> &nbsp;

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="../services.php">Services</a>
        <a href="../about us/index.php">About US</a>
        <a href="../contact.php">Contact Us</a>

    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="#" class="btn">checkout</a>
    </div>



<!-- login -->

<?php
include '../config.php';

error_reporting(0);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
$sql= "SELECT * FROM users WHERE username = '$username' and  password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if($row["user_type"] == "user") {
 header("Location: user/user.php");

}elseif($row["user_type"] == "admin") {
    header("Location: ../admin/admin.php");

}


}

?>


    <form id="register-form"  method="POST" class="login-form">
        <h3>login now</h3>
        <input type="text" name="username"  placeholder="your email" class="box">
        <input type="password" name="password" placeholder="your password" class="box">
        <!-- <p>forget your password <a href="#">click here</a></p> -->
        <p>don't have an account <a href="../register.php">create now</a></p>
        <input type="submit" name=register_btn value="login now" class="btn">
    </form>


</header>

<!-- header section ends -->

<!-- home section starts  -->


<section class="home" id="home">

    <div class="content">
        <h3>fresh and <span>organic</span> products for your</h3>
        <p>To view stats and farmer's stock for the day, click here.</p>
        <a href="#" class="btn" >Show statistics</a>
    </div>

</section>

<!-- home section ends -->


<section>






























</section>


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3><i class="fas fa-shopping-basket"></i> VEGGIE</h3>
            <p>Organic and fresh products for you directly from farms without intermediaries</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>                
                <a href="#" class="fab fa-whatsapp"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="tel:+962780094933" class="links"> <i class="fas fa-phone"></i> +962-780-094-433 </a>
            <a href="https://wa.me/+962780094933" target="_blank" class="links"> <i class="fa fa-phone"></i> +962-780-094-433  </a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZWxTFJRGcvjDpphNWdsqccNptwjtmPvZjwMLbnGnjjphnsvtHTsZNRSrgvTxQTlNNvMWg" target="_blank" class="links"> <i class="fas fa-envelope"></i> eyadalbaik01@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> info@veggie.com </a>
        </div>

        <div class="box">
            <h3>Quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Services </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> About Us </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Contact Us </a>
        </div>

        <div class="box">
            <h3>Paying</h3>
           
           <a> <img src="image/payment.png" class="payment-img" alt=""> </a>
        </div>

    </div>

    <div class="credit"> created by <span> Eyad - Ahmad - Abdullah </span> | all rights reserved </div>

</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>