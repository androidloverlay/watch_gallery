<?php include("Computerdb.php"); 
 $orders = mysql_query("SELECT * FROM orders");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Watch Gallery Online Sales System</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
.order{
	width: 30%;
    margin: 10px;
    background: #fff;
    box-shadow: 2px 1px 1px 1px #e2e2e2;
    padding: 10px;
}
</style>
</head>
<!-- <header>
	<div class="container-fluid">
	<img src="image/leftheader1.jpg" class="pull-left"></li>
	<img src="image/leftheader2.jpg" class="pull-left"></li>
	<img src="image/leftheader1.jpg" class="pull-left"></li>
	</div>
</header> -->
<body>
	<nav class="navbar home-menu">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="index.php">Home</a></li>
	      <li><a href="ProductEntry.php">Product Setup</a></li>
	      <li><a href="CategorySetup.php">Category Setup</a></li>
	      <li><a href="orderlist.php">Order List</a></li>
	      <li><a href="manage-product.php">Manage Product</a></li>
	      <li><a href="reports.php">Reports</a></li>
	      <li><a href="index.php">Logout</a></li>
	    </ul>
	</nav>
	<ul class="orders">
		 <?php while($order = mysql_fetch_assoc($orders)): ?>

		 	<div class="items">
			 <?php
				 $order_id = $order['id'];
				 $items = mysql_query("SELECT order_items.*, tbl_products.* FROM order_items LEFT JOIN tbl_products ON order_items.product_id =  tbl_products.ProductID WHERE order_items.order_id = $order_id ");
				 while($item = mysql_fetch_assoc($items)):
			 ?>
			 <b>
				 Product Name: <?php echo $item['ProductName'] ?>
				 -
				 Quantity : (<?php echo $item['qty'] 
				 ?>) 
			 </b>
			 <?php endwhile; ?>
		 </div>

		 <div class="order">
			 <b>Customer Name: <?php echo $order['name'] ?></b><br>
			 <i>Customer Email: <?php echo $order['email'] ?></i><br>
			 <span>Customer Phone Number: <?php echo $order['phone'] ?></span><br>
			 <p>
				 Address: <?php echo $order['address'] ?>
			 </p><br>
		 </div>
		 
		 </li>
		 
		 <?php endwhile; ?>
	</ul>
	<footer><span>Developed By Aung Min Tun</span></footer>
</body>
</html>