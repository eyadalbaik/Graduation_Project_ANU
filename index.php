
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEGGIE</title>
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

.fff {
    position: relative;
margin-top: -85px;
    width: 130%;
    height: 110%;
}
.content{
position: absolute;

}
    </style>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">



<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
        <!-- <a href="services.php">Services</a> -->
        <a href="about us/index.php">About US</a>
        <a href="contact.php">Contact Us</a>

    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>  Buyer
      <a href="login-farmer.php">  <div class="fas fa-user" id="login-btnn"></div>  seller </a>

    </div>

    <!-- search -->
<!-- 
    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form> -->

<!-- cart -->

    <!-- <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">JOD 4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">JOD 4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">JOD 4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : JOD 19.69/- </div>
        <a href="#" class="btn">checkout</a>
    </div> -->

<!-- login -->



    <?php
include 'config.php';

// error_reporting(0);

// if($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
    
// $sql= "SELECT * FROM users WHERE username = '$username' and  password = '$password'";
// $result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_array($result);

// if($row["user_type"] == "user" ) {
//  header("Location: user/index.php");

// }elseif($row["user_type"] == "admin") {
//     header("Location: admin/ggg/index.php");

// }


// }

?>


    <form id="register-form"  method="POST" class="login-form" action="b2.php">
        <h3>Login For Buyer  </h3>
        <input type="text" name="username"  placeholder="your email" class="box" required>
        <input type="password" name="password" placeholder="your password" class="box" required>
        <!-- <p>forget your password <a href="#">click here</a></p> -->
        <p>don't have an account <a href="register.php">create now</a></p>
        <input type="submit" name=register_btn value="login now" class="btn">
    </form>








</header>

<!-- header section ends -->

<!-- home section starts  -->


<section class="home" id="home">

<img src="image/newback.jpg" class="fff">



    <div class="content" >
        <h3>fresh and <span>organic</span> products for your</h3>
        <p style="color: #fff;">To view stats and farmer's stock for the day, click here.</p>
        <a href="user/statis.php" class="btn" style="width: 6cm;"><b>Show statistics</b></a>
    </div>

</section>

<!-- </div> -->


<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <!-- <img src="image/feature-img-1.png" alt=""> -->
            <h3>Reducing The Use Of Traditional Methods Of Farm Work</h3>
            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
            <!-- <a href="#" class="btn">read more</a> -->
        </div>

        <div class="box">
            <!-- <img src="image/feature-img-2.png" alt=""> -->
            <h3>Get The Best Products At The Right Price </h3>

            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a> -->
        </div>

        <div class="box">
            <!-- <img src="image/feature-img-3.png" alt=""> -->
            <h3>The Farmer Gets The Full Price He Asked For His Product </h3>
            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
            <!-- <a href="#" class="btn">read more</a> -->
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product-1.png" alt="">


                <h3>Fresh Orange</h3>
                <div class="price"> JOD 4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn"  >log in for add to cart</a>
            </div>


            <div class="swiper-slide box">
                <img src="image/product-2.png" alt="">
                <h3>fresh onion</h3>
                <div class="price"> JOD 4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn"  >log in for add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-6.png" alt="">
                <h3>fresh avocado</h3>
                <div class="price"> JOD 4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn"  >log in for add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-4.png" alt="">
                <h3>fresh cabbage</h3>
                <div class="price"> JOD 4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn"  >log in for add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product-5.png" alt="">
                <h3>fresh potato</h3>
                <div class="price"> JOD 4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn"  >log in for add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-6.png" alt="">
                <h3>fresh avocado</h3>
                <div class="price"> JOD 4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn"  >log in for add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-7.png" alt="">
                <h3>fresh carrot</h3>
                <div class="price"> JOD 4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn"  >log in for add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-8.png" alt="">
                <h3>green lemon</h3>
                <div class="price"> JOD 4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn"  >log in for add to cart</a>
            </div>

        </div>

    </div>





<!-- <div id="addEmployeeModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<br>
<h3 class="modal-title"><center>Sorry</center></h3>
<br><br><br>
<h4 class="modal-title"><center>You must log in first</center></h4>
<br>
</div>
</div>
</div>  -->








</section>

<!-- products section ends -->



<!-- categories section starts  -->

<!-- 
<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/cat-1.png" alt="">
            <h3>vegitables</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/cat-2.png" alt="">
            <h3>fresh fruits</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/cat-3.png" alt="">
            <h3>dairy products</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/cat-4.png" alt="">
            <h3>fresh meat</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section> -->

<!-- categories section ends -->

<!-- review section starts  -->
<!-- 
<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section> -->

<!-- review section ends -->

<!-- blogs section starts  -->
<!-- 
<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/blog-1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-2.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-3.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section> -->

<!-- blogs section ends -->

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