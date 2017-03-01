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
	<!-- <nav class="navbar home-menu">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="index.php">Home</a></li>
	      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Register <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          
	        </ul>
	      </li>
	 -->      <li><a href="#">Product List</a></li>
	      <li><a href="#">Order List</a></li>
	      <!-- <li><a href="index.php">Logout</a></li> -->
	    </ul>
	</nav>
	<div class="wapper">
		<div class="container">
			<form action="adminRegisterDB.php" method="POST">
				<table class="register">
					<!-- <tr>
						<td><label class="lbl" for="AdminID">AdminID </label></td>
						<td>:</td>
						<td><input type="text" id="AdminID" name="AdminID"></input></td>
					</tr> -->
					<tr>
						<td><label class="lbl" for="AdminName">AdminName </label></td>
						<td>:</td>
						<td><input id="AdminName" type="text" name="AdminName"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="Password">Password </label></td>
						<td>:</td>
						<td><input id="Password" type="text" name="Password"></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="ConfirmPassword">ConfirmPassword </label></td>
						<td>:</td>
						<td><input id="ConfirmPassword" type="text" name="ConfirmPassword"></input></td>
					</tr>
				</table>
				<div class="btn-box">
					<input  type="submit" value="Save" class="btn-click">
					<input  type="reset" value="Cancel" class="btn-click">
				</div>
			</form>
		</div>
	</div>
	<footer>
	<span> Developed By Aung Min Tun</span>
	</footer>
</body>
</html>