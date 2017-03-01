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
				<form action="PrpductEntryDB.php" method="POST" enctype="multipart/form-data">
				<table class="register">
					<!-- <tr>
						<td><label class="lbl" for="ProductID">ProductID </label></td>
						<td>:</td>
						<td><input type="text" id="ProductID" name="ProductID" required></input></td>

					</tr> -->
					<tr>
						<td><label class="lbl" for="ProductName">ProductName </label></td>
						<td>:</td>
						<td><input id="ProductName" type="ProductName" name="ProductName" required></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="ModelNo">ModelNo</label></td>
						<td>:</td>
						<td><input id="ModelNo" type="ModelNo" name="ModelNo" required></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="Price">Price</label></td>
						<td>:</td>
						<td><input id="Price" type="Price" name="Price" required></input></td>
					</tr>			
					<tr>
						<td><label class="lbl" for="Category">Category </label></td>
						<td>:</td>
						<td><select id="CategoryID" name="CategoryID" class="form-control s1" >
							<option value="">--Please select--</option>
							<?php

							include("Computerdb.php");
							$str="SELECT CategoryID,CategoryName FROM tbl_category";
							$res=mysql_query($str,$conn);
						

							while($row=mysql_fetch_array($res)):
							echo '<option value="'.$row["CategoryID"].'">'.$row["CategoryName"].'</option>';
							endwhile;
							?>

						 </select></td>						
					</tr>

					<tr>
						<td><label class="lbl" for="Image">Image</label></td>
						<td>:</td>
						<td><input type="file" accept="image/*" name="cover" id="cover" /></td>
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