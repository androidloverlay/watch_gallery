<?php
	 session_start();
	 include("Computerdb.php");

	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $address = $_POST['address'];
	 $pay_account = $_POST['payment_account'];
	 /*$total = $_POST["amount"];*/
	 
	 $temp = mysql_query("INSERT INTO orders (name, email, phone, address, status, created_date, modified_date,payment_account)
	 				VALUES ('$name','$email','$phone','$address', 0, now(), now(), '$pay_account')")
   or die(mysql_error());

	  $order_id = mysql_insert_id();

	 foreach($_SESSION['cart'] as $id => $qty) {
		 mysql_query("INSERT INTO order_items (order_id, product_id, qty) VALUES ($order_id,$id,$qty)")
     or die(mysql_error());
	 }
	 unset($_SESSION['cart']);

	 /*$pay_query="SELECT * FROM payment where accountno = $pay_account";
	 $res=mysql_query($pay_query);
						
	while($row=mysql_fetch_array($res)):
		$fianl_amount = $row['amount'] - $total;		
		$payment_id = $row["payment_id"] ;
		
	endwhile;
	mysql_query("UPDATE payment SET amount = '$fianl_amount' WHERE payment_id = $payment_id ");*/
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Watch Gallery Online Sales System</title>
  <link href="css/style2.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  		.sub-group{
  			float:right !important;
  		}
  		.odrlist{
  			    width: 90%;
    /* float: left; */
    /* top: 10%; */
    background: #fff;
    margin-left: 5%;
    border-radius: 5px;
  		}
  		.table tr:nth-child(2n){
  			background: #fffbdd;
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
    background: #cfe2f3;
}
  		.order-form{
width: 30%;
    height: 40%;
    padding: 10px;
    background: #fff;
    border-radius: 5px;
    margin: 60px 20px 0 20px;
  		}
  		.btn{
  			margin:30px 0 0 0;
  		}
  </style>
  <!-- <header>
	<div class="container-fluid">
	<img src="image/leftheader1.jpg" class="pull-left"></li>
	<img src="image/leftheader2.jpg" class="pull-left"></li>
	<img src="image/leftheader1.jpg" class="pull-left"></li>
	</div>
</header> -->
<head>
	<?php
                   include("header.php");
           ?>
</head>
<body>
	<nav class="navbar home-menu">
	    <ul class="nav navbar-nav">
	      <!-- <li class="active"><a href="productlist.php">Home</a></li>
	      <li><a href="productlist.php">Product List</a></li>
	      <li><a href="view_cart.php">(<?php echo $cart ?>) View Cart</a></li> -->
	      <li><a href="index.php">Logout</a></li>
	    </ul>
	</nav>
	<div style="padding:0 20px;height:300px;">
		 <h2>Order Submitted</h2>
		 <div class="msg">
			 Your order has been submitted. We'll deliver the items soon.
			 <a href="productlist.php" class="done">Product Store Home</a>
		 </div>
		 
	</div>
	 <div class="clear"></div>
            <div class="footer">
        <?php
                include("footer.php");
        ?>
      </div>
            
        </div>
          <script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        </script>
</body>
</html>