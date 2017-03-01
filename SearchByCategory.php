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
				

				<!-- <div class="CategoryGroups">
					<div class="cat-group">
						<h2>Citizen Group</h2>
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
						</div>
					</div>
				</div> -->

				
				

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