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
	      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Register <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="">Customer Register</a></li>
	          
	        </ul>
	      </li>
	      <li><a href="#">Product List</a></li>
	      <li><a href="#">Order List</a></li>
	      <li><a href="index.php">Logout</a></li>
	    </ul>
	</nav>
	<div class="wapper">
		<div class="container">
			<form action="Clogin.php" method="POST">
				<table class="register">
					<tr>
						<td><label class="lbl" for="CustomerID">CustomerID </label></td>
						<td>:</td>
						<td><input type="text" id="customerID" name="customerID"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="CustomerName">CustomerName </label></td>
						<td>:</td>
						<td><input id="customerName" type="text" name="customerName"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="Address">Address </label></td>
						<td>:</td>
						<td><input id="address" type="text" name="address"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="Phone">Phone </label></td>
						<td>:</td>
						<td><input id="phone" type="text" name="phone"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="Email">Email </label></td>
						<td>:</td>
						<td><input id="email" type="text" name="email"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="Password">Password </label></td>
						<td>:</td>
						<td><input id="password" type="text" name="password"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="ConfirmPassword">ConfirmPassword </label></td>
						<td>:</td>
						<td><input id="Confirmpassword" type="text" name="Confirmpassword"></input></td>
					</tr>
				</table>
				<div class="btn-box">
					<input  type="submit" value="Save" class="btn-click">
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