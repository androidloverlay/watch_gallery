<?php
	 session_start();
	 include("Computerdb.php");
	 $cart = 0;

	 if(isset($_SESSION['cart'])) {
		 foreach($_SESSION['cart'] as $qty) {
		 	$cart += $qty;
	 	}
 	}

 	 if(isset($_GET['cat'])) {
		 $cat_id = $_GET['cat'];
		 $yltstr = mysql_query("SELECT * FROM tbl_products WHERE CategoryID = $cat_id");
	 } else {
	 	$yltstr="Select * from tbl_products";
	 }
 	
	$yltres=mysql_query($yltstr);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Watch Gallery Online Sales System</title>
<head>
          <?php
                   include("header.php");
           ?>

</head>

          
<body>
	<!-- <div class="header"><img src="image/slide.jpg"></div> -->
	<div class="wrapper">
		<nav class="navbar home-menu">
		    <ul class="nav navbar-nav">
		      <li><a href="productlist.php">Product List</a></li>
		      <li><a href="view_cart.php">(<?php echo $cart ?>) View Cart</a></li>
		      <!-- <li><a href="logout.php">Logout</a></li> -->
		    </ul>
		</nav>
		<ul class="product">
			<?php
				include("Computerdb.php");
				
				while($yltrow=mysql_fetch_array($yltres)):?>
			<li>
				<img src="admin/image/<?php echo $yltrow['Image']?>" alt="" title=""/>
				<div><?php echo $yltrow['ProductName'] ?></div>
				<div><?php echo $yltrow['Price'] ?></div>
				<a href="product-detail.php?id=<?php echo $yltrow['ProductID'] ?>">More Detail</a>

				<?php endwhile; ?>
			</li>
		</ul>
	</div>


	
</body>
 		
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

</html>