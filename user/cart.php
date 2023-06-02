<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title> VEGGIE - Cart && ChekOut </title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<!-- <style>
	.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #F68B1E;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #FF8000;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style> -->

</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Your Cart</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	

<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>


</select>
</form>
</td>
<td><?php echo " JOD ". $product["price"]; ?></td>
<td><?php echo " JOD ". $product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}

?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo " JOD ".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>	
<br>
  
  <?php
echo "<a href = '#checkoutphp'><input type='submit' value='checkout'></a>";
// echo " <br><br><br><br><br><br><br><br>
// <div class='row'>
//   <div class='col-75'>
//     <div class='container'>
//       <form action='/action_page.php'>
      
//         <div class='row'>
//           <div class='col-50'>
//             <h3>Billing Address</h3>
//             <label for='fname'><i class='fa fa-user'></i> Full Name</label>
//             <input type='text' id='fname' name='firstname' placeholder='Eyad Albaik'>
//             <label for='email'><i class='fa fa-envelope'></i> Email</label>
//             <input type='text' id='email' name='email' placeholder='example@gmail.com'>
//             <label for='adr'><i class='fa fa-address-card-o'></i> Address</label>
//             <input type='text' id='adr' name='address' placeholder='Jordan Street'>
//             <label for='city'><i class='fa fa-institution'></i> City</label>
//             <input type='text' id='city' name='city' placeholder='Amman'>

//             <div class='row'>
              
//               <div class='col-50'>
//                 <label for='zip'>Zip</label>
//                 <input type='text' id='zip' name='zip' placeholder='10001'>
//               </div>
//             </div>
//           </div>

//           <div class='col-50'>
//             <h3>Payment</h3>
//             <label for='fname'>Accepted Cards</label>
//             <div class='icon-container'>
//               <i class='fa fa-cc-visa' style='color:navy;'></i>
//               <i class='fa fa-cc-amex' style='color:blue;'></i>
//               <i class='fa fa-cc-mastercard' style='color:red;'></i>
//               <i class='fa fa-cc-discover' style='color:orange;'></i>
//             </div>
//             <label for='cname'>Name on Card</label>
//             <input type='text' id='cname' name='cardname' placeholder='John More Doe'>
//             <label for='ccnum'>Credit card number</label>
//             <input type='text' id='ccnum' name='cardnumber' placeholder='1111-2222-3333-4444'>
//             <label for='expmonth'>Exp Month</label>
//             <input type='text' id='expmonth' name='expmonth' placeholder='September'>
//             <div class='row'>
//               <div class='col-50'>
//                 <label for='expyear'>Exp Year</label>
//                 <input type='text' id='expyear' name='expyear' placeholder='2018'>
//               </div>
//               <div class='col-50'>
//                 <label for='cvv'>CVV</label>
//                 <input type='text' id='cvv' name='cvv' placeholder='352'>
//               </div>
//             </div>
//           </div>
          
//         </div>
		
//        <a href='order_successful.php'><input type='button' value='Continue to checkout' class='btn'></a>
//       </form>
//     </div>
//   </div>
// </div>

// ";
}
else{
	echo "<h3>Your cart is empty!</h3>";
}
?>
<a href = "index.php"><input type="submit" value="back"></a>

</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>








</div>
</body>
</html>