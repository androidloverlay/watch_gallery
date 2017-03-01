<?php
	 session_start();
	 include("Computerdb.php");
	 $cart = 0;

	 if(isset($_SESSION['cart'])) {
		 foreach($_SESSION['cart'] as $qty) {
		 	$cart += $qty;
	 	}
 	}
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
<div class="container">
         
	<nav class="navbar home-menu">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="index.php">Home</a></li>
	      <li><a href="productlist.php">Product List</a></li>
	      <li><a href="view_cart.php">(<?php echo $cart ?>) View Cart</a></li>
	      <!-- <li><a href="index.php">Logout</a></li> -->
	    </ul>
	</nav>
	<div class="wapper">
		<div class="container">
			<div class="detail-container">
				<!-- <img src="image/dell-3.jpg" alt="" title=""/> -->
				<div class="detail-box">
					<div class="right-detail">
						
						<?php
							include("Computerdb.php");
							
							$id = $_GET['id'];
							$yltstr="Select * from tbl_products Where ProductID = '$id' ";
							$yltres=mysql_query($yltstr);
								
						while($yltrow=mysql_fetch_array($yltres)):?>
							<img src="admin/image/<?php echo $yltrow['Image']?>" alt="" title=""/> 
						<ul>
							<li>Product Name :<strong> <?php echo $yltrow['ProductName'] ?></strong></li>
							<li>Model No.  : <strong><?php echo $yltrow['ModelNo'] ?></strong></li>
							<li>Price : <strong><?php echo $yltrow['Price'] ?></strong></li>
						</ul>

						<div class="buyDiv">
							<a href="add_to_cart.php?id=<?php echo $_GET['id'] ?>">Buy</a>
							<span class="back"><a href="productlist.php"> > Back to Choice</a></span>
						</div>
						<?php endwhile; ?>
						
					</div>
				</div>
				<!-- <a href="order.php">Order</a> -->
				
					
			</div>
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