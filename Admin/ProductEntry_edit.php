<?php

	include("Computerdb.php");
	$id = $_GET['id'];
	$str="SELECT * FROM tbl_products WHERE ProductID = $id";
	$res=mysql_query($str,$conn);
	$row = mysql_fetch_assoc($res);
	$categoryID = $row['Category'];
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
	      
	      </li>
	      <li><a href="ProductEntry.php">Product Setup</a></li>
	      <li><a href="CategorySetup.php">Category Setup</a></li>
	      <li><a href="#">Order List</a></li>
	      <li><a href="manage-product.php">Manage Product</a></li>
	      <li><a href="reports.php">Reports</a></li>
	      <li><a href="index.php">Logout</a></li>
	    </ul>
	</nav>
	<div class="wapper">
		<div class="container">
	
			<div class="slider">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">

				<form action="ProductEntry_update.php" method="POST" enctype="multipart/form-data">
				<table class="register">
					<tr>
						<td><label class="lbl" for="ProductID">ProductID </label></td>
						<td>:</td>
						<td><input type="text" id="ProductID" name="ProductID" value="<?php echo $row['ProductID'] ?>" required></input></td>

					</tr>
					<tr>
						<td><label class="lbl" for="ProductName">ProductName </label></td>
						<td>:</td>
						<td><input id="ProductName" type="ProductName" name="ProductName" value="<?php echo $row['ProductName'] ?>" required></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="ModelNo">ModelNo</label></td>
						<td>:</td>
						<td><input id="ModelNo" type="ModelNo" name="ModelNo" value="<?php echo $row['ModelNo'] ?>" required></input></td>
					</tr>
					<tr>
						<td><label class="lbl" for="Price">Price</label></td>
						<td>:</td>
						<td><input id="Price" type="Price" name="Price" value="<?php echo $row['Price'] ?>" required></input></td>
					</tr>			
					<tr>
						<td><label class="lbl" for="Category">Category </label></td>
						<td>:</td>
						<td><select id="CategoryID" name="CategoryID" class="form-control s1" >
							<?php 
								$str="SELECT * FROM tbl_category WHERE CategoryID = $categoryID";
								$res=mysql_query($str);
								$cat1=mysql_fetch_assoc($res)
							?>
							<option value="<?php echo $categoryID?>"><?php echo $cat1['CategoryName'] ?></option>
							<?php

							$str="SELECT CategoryID,CategoryName FROM tbl_category";
							$result=mysql_query($str,$conn);
								while($cat=mysql_fetch_array($result)):
									echo '<option value="'.$cat["CategoryID"].'">'.$cat["CategoryName"].'</option>';
								endwhile;
							?>

						 </select></td>						
					</tr>

					<tr>

						<td><label class="lbl" for="Image">Image</label></td>
						<td>:</td>
						<td><img src="image/<?php echo $row["Image"] ?>" width="30%">
						<td><input type="file" accept="image/*" name="cover" id="cover" /></td>
						
					</tr>
					
				</table>
				<div class="btn-box">
					<button type="submit" class="btn-click">Update</button>  
					<button  type="submit" value="Cancel" class="btn-click">Cancel</button>
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