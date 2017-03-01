<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Watch Gallery Online Sales System</title><title>Computer Sales System</title>
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
					<form action="CategorySetupDB.php" method="POST">
						<table class="register">
							<tr>
								<td><label class="lbl" for="CategoryName">CategoryName </label></td>
								<td>:</td>
								<td><input id="CategoryName" type="CategoryName" name="CategoryName" required></input></td>	
							</tr>
							<tr>
								<td><label class="lbl" for="">Category Description </label></td>
								<td>:</td>
								<td><input id="Categorydesc" type="text" name="Categorydesc" required></input></td>
							</tr>
						</table>
						<div class="btn-box">
							<input  type="submit" value="Save" class="btn-click">
							<input  type="submit" value="Cancel" class="btn-click">
						</div>
					</form>
			</div>
		</div>
	</div>
	<footer>
	<span>Developed By Aung Min Tun</span>
	</footer>
</body>
</html>