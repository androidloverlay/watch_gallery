<!DOCTYPE html>
<html>

<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Watch Gallery Online Sales System</title>
<link href="css/style2.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<header>
	<head>
          <?php
                   include("header.php");
           ?>

	</head>

</header>
	
<body>
	
	<div class="wapper">
		<div class="container">
			<form action="Clogin.php" method="POST">
				<table class="register">
					
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

					<input  type="submit" value="Save" class="btn-click">
					<input  type="reset" value="Cancel" class="btn-click">
				
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