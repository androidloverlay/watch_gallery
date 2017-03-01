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
	<div class="wapper">
		<div class="container">
	
			<div class="slider">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<form action="tbl_productsDB.php" method="POST" enctype="multipart/form-data">
				<table class="register">
					
						<td>
						<a href="customersrep.php" 
						class="#">Customer Report</a>
						</td>
						<td>
							<a href="ordersrep.php" 
							class="#">Orders Report</a>
						</td>
						<td>
							<a href="salesrp.php" 
							class="#">Sales Report</a>
						</td>
					
						

						 </td>						
					</tr>

					
					
				</table>
				 
			</div>
		</div>
	</div>
	<footer>
	<span>Developed By Aung Min Tun</span>
	</footer>
</body>
</html>