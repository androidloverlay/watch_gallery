<?php
session_start();
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

</head>
<!--<header>
	<div class="container-fluid">
	<img src="image/leftheader1.jpg" class="pull-left"></li>
	<img src="image/leftheader2.jpg" class="pull-left"></li>
	<img src="image/leftheader1.jpg" class="pull-left"></li>
	</div>
</header>-->
<body>
	<nav class="navbar home-menu">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="index.php">Home</a></li>

	      <li><a href="adminRegister.php">Admin Register</a></li>
	      
	      
	      <!-- <li class="dropdown">
	      <a class="dropdown-toggle" data-toggle="dropdown"
	      >User Account 
	      <span class="caret"> -->
	      	
	      </span>
	      </a>

	        <!-- <ul class="dropdown-menu">
	          <li><a href="adminRegister.php">Admin Register</a></li>
	          <li><a href="staffRegister.php">Staff Register</a></li>
	        </ul> -->
	      </li>
	      <li><a href="#">Product Lists</a></li>
	      <li><a href="#">Order Lists</a></li>
	      <!-- <li><a href="index.php">Logouts</a></li> -->
	    </ul>
	</nav>
	<div class="wapper">
		<div class="container">
	
			<div class="slider">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="image/slider-1.jpg" alt="Chania">
					    </div>

					    <div class="item">
					      <img src="image/slider-2.jpg" alt="Chania">
					    </div>

					    <div class="item">
					      <img src="image/slider-3.jpg" alt="Flower">
					    </div>
					  </div>
					</div>

					<form action="AdminLogin.php" method="POST">
						<table class="register">
							<tr>
								<td><label class="lbl" for="AdminName">AdminName </label></td>
								<td>:</td>
								<td><input type="text" id="AdminName" name="AdminName" required></input></td>
							</tr>
							<tr>
								<td><label class="lbl" for="Password">Password </label></td>
								<td>:</td>
								<td><input id="Password" type="password" name="Password" required></input></td>
							</tr>
							
						</table>
						<div class="btn-box">
							<input  type="submit" value="Login" class="btn-click">
							<input  type="reset" value="Cancel" class="btn-click">
						</div>
					</form>
			</div>
		</div>
	</div>
	<footer><span>Developed By Aung Min Tun</span></footer>
</body>
</html>