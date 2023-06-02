


<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "csc";

$conn = mysqli_connect($host, $user, $pass, $db);
$r = mysqli_query ( $conn,"SELECT * FROM `users`");


if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
session_start();


if ($_SESSION['food'] == '')
{

    $_SESSION['food'] = 1;
    //echo 'the session is empty';
}


?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VEGGIE</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<link rel="stylesheet" href="../css/style.css">


        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



<link rel="stylesheet" href="@sweetalert2/theme-borderless/borderless.css">
<script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

<script src="sweetalert2/dist/sweetalert2.min.js"></script>

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

        
.logout {
    width: 20px;
    height: 20px;
    float: right;
}

.element {
  float:right;
  width: 40%;
  height: 100px;
  background: #FF7700CE;
  margin: 5px;
  margin-top: -70px;
  text-align: center;
  transition: 0.6s;

}

.element:hover {
    background: #ff7800;
transition: 0.9s;
}


.elements {
  float:left;
  width: 40%;
  height: 100px;
  background: #FF7700CE;
  margin: 5px;
  margin-top: -70px;
  text-align: center;

}



.elements:hover {
    background: #ff7800;
transition: 0.9s;
}

.bt {
    width: 100px;
    border-radius: 10px;
}

.fff {
    position: relative;
margin-top: -100px;
    width: 130%;
    height: 110%;
}
.content{
position: absolute;

}

</style>


</head>
<body>


<?php


//include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `ve` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$price = $row['price'];
$code = $row['code'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,	
	'price'=>$price,
	'code'=>$code,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>

	

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> VEGGIE </a> &nbsp;

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="products.php">products</a>
        <!-- <a href="../services.php">Services</a> -->
        <a href="../about us/index.php">About US</a>
        <a href="../contact.php">Contact Us </a>&nbsp &nbsp
       <a href="../admin/logout.php"><img class="logout" src="../image/logout.png" alt=""></a>



        
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="in.php"><img src="cart-icon.png" /> <span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

    </nav>
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
<img src="../image/newback.jpg" class="fff">

    <div class="content">
        <h3>fresh and <span>organic</span> products for your</h3>
        <p style="color: #fff;">To view stats and farmer's stock for the day, click here.</p>
        <a href="statis.php" class="btn" style="width: 6cm;"><b>Show statistics</b></a>
    </div>

</section>

<!-- home section ends -->




<!-- /////////////////////////////////////////////////////////////////////////////////////// -->



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


<br><br><br><br>

<section class="features" id="features">
<h1 class="heading">   <span>Category</span> </h1>

<div class="box-container">

<div class="box" onclick="Vegetable()">
<img src="../image/fruit-and-vegetables-basket-png-20.png" alt="">
<h3>Vegetable</h3>
</div>


<div class="box" onclick="Fruits()">
<img src="../image/4-48879_fruit-png-fruits-png.png" alt="">
<h3>Fruits</h3>
</div>


<div class="box" onclick="Leafy()">
<img src="../image/Official_Leafy_logo_3.8.webp" alt="">
<h3>Leafy</h3>
</div>


</div>
</section>

<br><br><br><br><br><br><br><br><br><br>



<div class="element">
    <center> <h1 style="color: #fff;">Go to Store</h1> </center>
    <br>
   <a href="products.php"> <input class="bt" type="submit" value="Go to Store"> </a>
  </div>

  <div class="elements">
  <center> <h1 style="color: #fff;">view Statis</h1> </center>
  <br>
  <a href="statis.php"> <input class="bt" type="submit" value="view Statis"> </a>

  </div>




<br><br><br><br><br><br><br><br>











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
           
           <a> <img src="../image/payment.png" class="payment-img" alt=""> </a>
        </div>

    </div>

    <div class="credit"> created by <span> Eyad - Ahmad - Abdullah </span> | all rights reserved </div>

</section>


<script>
    function Vegetable() {

        swal({
  title: "Vegetable",
  text: "Vegetables are one of the important food groups for human health. This is because it contains very important nutrients such as: fiber, potassium, folate, vitamins (A, C, E), and many others. Vegetables can be eaten raw or cooked, fresh or frozen, including: zucchini, green peppers, artichokes, asparagus and others.",
  icon: "success",
  button: "Aww yiss!",
});

}

function Fruits() {

swal({
title: "Fruits",
text: "Fruits are an important part of a healthy diet, and they must be eaten in a variety of ways, and it is also worth paying attention to the quantity eaten. There is no single fruit that provides all the nutrients a person needs, and a diet rich in vegetables and fruits provides the person with many health benefits.",
icon: "success",
button: "Aww yiss!",
});

}


function Leafy() {

swal({
title: "Leafy",
text: "There are some leafy vegetables that are rich in calcium, such as cabbage and kale, which helps to have strong teeth and bones and reduces the risk of osteoporosis. Leafy greens also contain potassium, which protects against osteoporosis and helps maintain blood pressure.",
icon: "success",
button: "Aww yiss!",
});

}
</script>

</body>
</html>