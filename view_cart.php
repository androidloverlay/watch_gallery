<?php
	 session_start();
	 $cart = 0;

	 if(isset($_SESSION['cart'])) {
		 foreach($_SESSION['cart'] as $qty) {
		 	$cart += $qty;
	 	}
 	}

	 if(!isset($_SESSION['cart'])) {
		 header("location: index.php");
		 exit();
 	 }
 	include("Computerdb.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta name="viewport" content="width=device-width, initial-scale=1"
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Watch Gallery Online Sales System</title>

<link href="css/style2.css" type="text/css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/all_slide.js"></script>
<script type="text/javascript" src="js/cycle-plugin.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>

<!--slider-->
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

  <style>
  		.sub-group{
  			float:right !important;
  		}
  		.odrlist{
  			    width: 90%;
    /* float: left; */
    /* top: 10%; */
    background: #fff;
    
    border-radius: 5px;
  		}
  		.table tr:nth-child(2n){
  			background: #f5f5f5;
  		}
		.table tr:last-child{
  			background: #fff;
  		}
  		.order-form input{
  			    margin: 5px;
    border: 1px solid #e2e2e2;
  		}
  		.orderheader{
  			       font-size: 18px;
    padding: 5px;
    background: #699f85;
    color:#fff;
}
  		
  		.btn{
  			margin:30px 0 0 0;
  		}

  		    .nivo-prevNav,.nivo-nextNav,.nivo-control{ 
      display: none;
    }
    .homeMenu{
      display: none;
    }
    .nivoSlider{
      border: 0px;
      border-radius: 0;
    }
  </style>
<head>
	<?php
                   include("header.php");
           ?>
</head>
<body>
<div class="container">
         
	<nav class="navbar home-menu">
	    <ul class="nav navbar-nav">
	      
	      <li><a href="productlist.php">Product List</a></li>
	      <li><a href="view_cart.php">(<?php echo $cart ?>) View Cart</a></li>
	      <li><a href="index.php">Logout</a></li>
	    </ul>
	</nav>
	<div class="odrlist">
		<table class="table">
			<tr>	
				<th><label class="lbl">Product Name</label> </th>
				<th><label class="lbl">ModelNo</label> </th>
				<th><label class="lbl">Quantity</label> </th>
				<th><label class="lbl">Price</label> </th>
				<th><label class="lbl">Amount</label> </th>
	    	</tr>
	    	 <?php
				 $total = 0;
				 foreach($_SESSION['cart'] as $id => $qty):
				 $result = mysql_query("SELECT * FROM tbl_products WHERE ProductID=$id");
				 $row = mysql_fetch_assoc($result);
				 $total += $row['Price'] * $qty;
			 ?>
			 <tr>
				<td><?php echo $row["ProductName"]?></td>
				<td><?php echo $row["ModelNo"]?></td>
				<td><?php echo $qty ?></td>
				<td><?php echo $row["Price"]?></td>
				<td><?php echo $qty * $row["Price"] ?></td>
	    	</tr>
	    	 <?php endforeach; ?>
	    	 <tr>
				 <td colspan="4" align="right" style="font-size:16px;"><b>Total:</b></td>
				 <td>$<?php echo $total; ?></td>
			 </tr>
	    </table>
	 </div>
	 <div class="order_box">
	 	<div class="order-form">
	 		<div class="orderheader">! Order Now</div>
	 		<form action="submit-order.php" method="post">
		 		<div class="label_box">
		 		<label>Your Name</label>
		 		<input type="text" name="name" id="name" style="margin-left:8px;">
		 		</div>
		 		<div class="label_box">
		 		<label>Email</label>
		 		<input type="text" name="email" id="email" style="margin-left:43px;">
		 		</div>
		 		<div class="label_box">
		 		<label>Phone</label>
		 		<input type="text" name="phone" id="phone" style="margin-left:35px;">
		 		</div>
		 		
		 		<div class="label_box">
		 		<label>Address</label>
		 		<textarea name="address" id="address" style="margin-left:23px;width:200px;border:1px solid #e2e2e2;"></textarea>
		 		</div>
		 		<div class="label_box">
		 		<label>Pay Account No</label>
		 		<input type="text" name="payment_account" id="payment_account" style="margin-left:20px;">
		 		</div>
		 		<!-- <input type="number" style="display:none;" name="amount" value="<?php echo $total ?>"> -->
				<button type="submit" class="btn btn-primary">Submit Order</button>

		 	</form>
	 	</div>
	 </div>
	 <footer><span>Developed By Aung Min Tun</span></footer>
</body>
</html>