<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Watch Gallery Online Sales System</title>
<link href="css/style2.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

<head>
	<?php
                   include("header.php");
           ?>
</head>

<body>
	<!-- <nav class="navbar home-menu">
	    <ul class="nav navbar-nav">
	      
	      <li><a href="index.php">Logout</a></li>
	    </ul>
	</nav> -->
	<div class="wapper">
		<div class="container">
			<form action="searchDetail.php" method="POST" enctype="multipart/form-data">

				<table class="register">			
					<tr>
						<td><label class="lbl" for="Category"> Search by Category </label></td>
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
						 </select>
						 </td>						
					</tr>					
				</table>
				<div class="btn-box">
					<input  type="submit" value="Search" class="">
					<input  type="reset" value="Cancel" class="">
				</div>
				

				<div class="CategoryGroups">
					<div class="cat-group">
					<?php
								include("Computerdb.php");


/*
         $order_id = $order['id'];
         $query = mysql_query("SELECT order_items.*, tbl_products.* FROM order_items LEFT JOIN tbl_products ON order_items.product_id =  tbl_products.ProductID WHERE order_items.order_id = $order_id ");
         $item = mysql_fetch_assoc($items);*/



							$catid=$_POST['CategoryID']	;
							$str2="SELECT tbl_category.*,tbl_products.* FROM tbl_category LEFT JOIN tbl_products ON tbl_category.CategoryID=tbl_products.Category WHERE tbl_category.CategoryID=$catid";
							$res2=mysql_query($str2,$conn) or die(mysql_error());
						

							while($row2=mysql_fetch_assoc($res2)):
							

							
							
							?>
						<h2> <?php echo $row2["CategoryName"] ?></h2>
						<div class="sub-group">
							<img src="admin/image/<?php echo $row2['Image']?>" alt="" title=""/> 
							<span><?php echo $row2["ModelNo"] ?></span>
							<a href="product-detail.php?id=<?php echo $row2['ProductID'] ?>">More Detail</a>
						</div>
						<!-- <div class="sub-group">
							<img src="#" alt="" title=""/>
							<span>Price - $600</span>
							<a href="product-detail.php">More Detail</a>
						</div>
						<div class="sub-group">
							<img src="#" alt="" title=""/>
							<span>Price - $720</span>
							<a href="product-detail.php">More Detail</a>
						</div>
					</div>
					<div class="cat-group">
						<h2>G-Shock Group</h2>
						<div class="sub-group">
							<img src="#" alt="" title=""/>
							<span>Price - $800</span>
							<a href="product-detail.php">More Detail</a>
						</div>
						<div class="sub-group">
							<img src="#" alt="" title=""/>
							<span>Price - $600</span>
							<a href="product-detail.php">More Detail</a>
						</div>
						<div class="sub-group">
							<img src="#" alt="" title=""/>
							<span>Price - $720</span>
							<a href="product-detail.php">More Detail</a>
						</div>
					</div>
					<div class="cat-group">
						<h2>Rado Group</h2>
						<div class="sub-group">
							<img src="#" alt="" title=""/>
							<span>Price - $800</span>
							<a href="product-detail.php">More Detail</a>
						</div>
						<div class="sub-group">
							<img src="#" alt="" title=""/>
							<span>Price - $600</span>
							<a href="product-detail.php">More Detail</a>
						</div>
						<div class="sub-group">
							<img src="#" alt="" title=""/>
							<span>Price - $720</span>
							<a href="product-detail.php">More Detail</a>
						</div> -->
					</div>
				</div>

				<?php endwhile; ?> 
				

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