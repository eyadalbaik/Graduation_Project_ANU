<!-- 
    <form>
        <label for="lang-switch">
            <span lang="ar">العربية</span>
            <span lang="en">Language</span>
        </label>
        <select id="lang-switch">
            <option value="en">English</option>
            <option value="ar" selected>Arabic</option>
        </select>
    </form>
    
    <p>
        <span lang="ar">العربية</span>
        <span lang="en">Text in English</span>
    </p>
    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script>
    $('[lang]').hide(); // hide all lang attributes on start.
    $('[lang="ko"]').show(); // show just Korean text (you can change it)
    $('#lang-switch').change(function () { // put onchange event when user select option from select
        var lang = $(this).val(); // decide which language to display using switch case. The rest is obvious (i think)
        switch (lang) {
            case 'en':
                $('[lang]').hide();
                $('[lang="en"]').show();
            break;
            case 'ko':
                $('[lang]').hide();
                $('[lang="ar"]').show();
            break;
            default:
                $('[lang]').hide();
                $('[lang="ar"]').show();
            }
    });
    </script>
 -->
















<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
<title>VEGGIE-Contact Us</title>
<style>
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











/* Form */
.container{
	margin:auto;
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  border-right: 5px solid #4A91E2;
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  /* background: #afafb6; */
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}


.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #4A91E2D3;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #217CE4;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}







/* / form */















</style>

</head>
<body>

<header class="header">
<a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> VEGGIE </a> &nbsp;
<nav class="navbar">
	<a href="index.php">home</a>
	<a href="#products">products</a>
	<!-- <a href="services.php">Services</a> -->
	<a href="about us/index.php">About Us</a>
	<a href="contact.php">Contact Us</a>

</nav>
</header>
<br><br><br>

<!-- 
<div class="container">
  <form action="/action_page.php">
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email..">

    <label for="country">Citie</label>
    <select id="country" name="country">
    <option value="Amman">Select Citie</option>
      <option value="Amman">Amman</option>
      <option value="Zarqa">Zarqa</option>
      <option value="Balqa">Balqa</option>
      <option value="Madaba">Madaba</option>
      <option value="Karak">Karak</option>
      <option value="Irbid">Irbid</option>
      <option value="Jerash">Jerash</option>
      <option value="Ajloun">Ajloun</option>
      <option value="Mafraq">Mafraq</option>
      <option value="Tafila">Tafila</option>
      <option value="Ma'an">Ma'an</option>
      <option value="Aqaba">Aqaba</option>
    </select>


    <label for="country">User Type</label>
    <select id="user_type" name="user_type">
    <option value="farmer">Select Type</option>
      <option value="farmer">Farmer</option>
      <option value="customer">Customer</option>
    </select>




    <label for="messege">Messege</label>
    <textarea id="messege" name="messege" placeholder="Write your Messege.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div> -->






<br><br><br>

<div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic"><a href="https://www.google.com/maps/place/%D8%AC%D8%A7%D9%85%D8%B9%D8%A9+%D8%B9%D8%AC%D9%84%D9%88%D9%86+%D8%A7%D9%84%D9%88%D8%B7%D9%86%D9%8A%D8%A9%E2%80%AD/@32.3965521,35.8251511,17z/data=!3m1!4b1!4m5!3m4!1s0x151c7c1eca289703:0x84a2459ae48abda0!8m2!3d32.3965476!4d35.8229678" target="_blank">Address</a></div>
          <div class="text-one">Ajulun University</div>
          <div class="text-two"> Ajlun, Jordan </div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic"><a href="tel:+962780094933">Phone</a></div>
          <div class="text-one">+962 7800 9493 3</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic"><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZWxTFJRGcvjDpphNWdsqccNptwjtmPvZjwMLbnGnjjphnsvtHTsZNRSrgvTxQTlNNvMWg" target="_blank">Email</a></div>
          <div class="text-one">eyadalbaik01@gmail.com</div>
          <div class="text-two">info@veggie.com</div>
        </div>
      </div>
      <div class="right-side">
      <div class="topic-text">Send Us a Message</div>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message"></textarea>
        </div>
        <div class="button">
          <input type="button" value="Send Now" >

        </div>
      </form>
    </div>
    </div>
  </div>









</body>
</html>
