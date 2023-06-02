<html>
<head>
<meta charset="utf-8"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VEGGIE-Services</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/style.css">

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

		
@charset "utf-8";


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-size: cover;
background-repeat: no-repeat;
    min-height: 100vh;


}














.services{
	width:100%;
	height: 100vh;
	display: flex;
	flex-direction: column;
	justify-content: space-evenly;
	align-items: center;
}
.s-heading{
	text-align:center;
}
.s-heading h1{
	color:#576975;
	font-size: 4rem;
	font-weight: 405;
	letter-spacing: 1px;
	margin: 1px;
}
.s-heading p{
	color: rgba(87,105,117,0.60);
	font-size: 2rem;
	margin: 6px;
	text-align: center;
}
.s-box-container{
	width:100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.s-box{
    background: #f7f7f7;
	display:flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	border-radius: 10px;
	width:300px;
	padding: 20px 25px;
	height: 400px;
	box-sizing: border-box;
	margin: 30px;
	position: relative;
    transition: all ease 0.6s;

}
.s-box img{
	height: 90px;
}
.s-box h1{
	color:#576975;
	letter-spacing: 1px;
	font-size: 2rem;
	margin-bottom: 8px;
	
}
.s-box p{
	color: rgba(87,105,117,0.90);
	text-align: center;
	font-size: 1rem;

}
.s-btn{
	width: 160px;
	height: 50px;
	border-radius: 20px;
	border:1px solid rgba(74,144,226,0.50);
	display: flex;
	justify-content: center;
	align-items: center;
	color:#ff7800;
	margin-top:10px; 
	font-size: 1.4rem;

}
.bar{
	width: 100px;
	height: 6px;
	position: absolute;
	left: 50%;
	top: 0%;
	transform: translateX(-50%);
	background-color:#ff7800; 
	border-radius: 0px 0px 10px 10px;
	display: none;
	animation: bar 0.5s;
}
.s-box:hover{
	box-shadow: 5px 5px 20px #000;
	transition: all ease 0.3s;
}
.s-btn:hover{
	background-color:#ff7800;
	border: 1px solid #ff7800;
	color:#FFFFFF;
	transition: all ease 0.3s;
}
.s-box:hover .bar{
	display: block;
}
@keyframes bar{
	0%{
		width:0px;
	}
	100%{
		width:100px;
	}
}
@media(max-width:1050px){
	.s-box-container{
		flex-wrap: wrap;
		
	}	
	.services{
		height: auto;
	}
	.s-heading{
		margin: 15px;
	}
	.s-box{
		flex-grow: 1;
	}
	
}



/* media queries  */

@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .header{
        padding:2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:768px){

    #menu-btn{
        display: inline-block;
    }

    .header .search-form{
        width:90%;
    }

    .header .navbar{
        position: absolute;
        top:110%; right:-110%;
        width:30rem;
        box-shadow: var(--box-shadow);
        border-radius: .5rem;
        background: #fff;
    }

    .header .navbar.active{
        right:2rem;
        transition: .4s linear;
    }

    .header .navbar a{
        font-size: 2rem;
        margin:2rem 2.5rem;
        display: block;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

    .heading{
        font-size: 2.5rem;
    }

    .footer{
        text-align: center;
    }

    .footer .box-container .box .payment-img{
        margin: 2rem auto;
    }

}







</style>


</head>
<body>



    
<header class="header">
<a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> VEGGIE </a> &nbsp;
<nav class="navbar">
	<a href="index.php">home</a>
	<a href="#products">products</a>
	<a href="services.php">Services</a>
	<a href="about us/index.php">About Us</a>
	<a href="contact.php">Contact Us</a>

</nav>
</header>

<br><br><br><br><br>

	<section class="services">
	<!--heading---------------->
	<div class="s-heading">
	<h1>Ser<font color="#ff7800">vic</font>es</h1>
	<p>We provide the best services to customers and farmers</p>
	</div>
	<!--services-box-container------------------->
	<div class="s-box-container">
	<!--service-box-1---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="1" src="image/farmer-logo.png" style="border-radius: 100px;" />
	<!--servies-name---------->
	<h1>Farmers services</h1>
	<!--details------>
		<p>The farmer can load crops of all kinds.</p>
	<!--btn---------->
	<a class="s-btn" href="#">More</a>
	</div>
		<!--service-box-1---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="2" src="image/cust-home.jpg" style="border-radius: 15px;" />
	<!--servies-name---------->
	<h1>Customer Service</h1>
	<!--details------>
		<p>The customer can choose the type and location of the crop and add it to the basket .</p>
	<!--btn---------->
	<a class="s-btn" href="#">More</a>
	</div>
		<!--service-box-3---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="3" src="image/home-hero-img.png"  />
	<!--servies-name---------->
	<h1>Purpose Of Site</h1>
	<!--details------>
		<p>The purpose of this site is to achieve communication between the customer and farmers throughout the Kingdom .</p>
	<!--btn---------->
	<a class="s-btn" href="#">More</a>
	</div>
	</div>
	</section>


</body>
</html>