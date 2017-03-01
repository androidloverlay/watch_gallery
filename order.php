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
<header>
	<div class="container-fluid">
	<img src="image/leftheader1.jpg" class="pull-left"></li>
	<img src="image/leftheader2.jpg" class="pull-left"></li>
	<img src="image/leftheader1.jpg" class="pull-left"></li>
	</div>
</header>
<body>
	<nav class="navbar home-menu">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="index.php">Home</a></li>
	      <li><a href="productlist.php">Product List</a></li>
	      <li><a href="view_cart.php">Order List</a></li>
	      <li><a href="index.php">Logout</a></li>
	    </ul>
	</nav>
	<div class="wapper">
		<div class="container">
			<h3>Ordered Detail</h3>
			<form action="" method="" enctype="multipart/form-data">
				<table class="register">
					<tr>
						<td><label class="lbl" for="">Ordered ID </label></td>
						<td>:</td>
						<td><input type="text" id="" name="" required></input></td>

					</tr>
					<tr>
						<td><label class="lbl" for="">Customer ID </label></td>
						<td>:</td>
						<td><input id="" type="text" name="" required></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="">Customer Name</label></td>
						<td>:</td>
						<td><input id="" type="text" name="" required></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="">Product ID</label></td>
						<td>:</td>
						<td><input id="" type="text" name="" required placeholder="000001"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="">Product Name</label></td>
						<td>:</td>
						<td><input id="" type="text" name="" required placeholder="Acer"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="">Model No.</label></td>
						<td>:</td>
						<td><input id="" type="text" name="" required placeholder="987456"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="">Price</label></td>
						<td>:</td>
						<td><input id="" type="text" name="" required placeholder="$500"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="">Available Order Quantity</label></td>
						<td>:</td>
						<td><input id="" type="text" name="" required></input></td>
					</tr>
					
				</table>
				<div class="btn-box">
					<input  type="submit" value="Order" class="btn-click">
					<input  type="submit" value="Cancel" class="btn-click">
				</div>
			</form>

			
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