<?php
	 session_start();
	 if(isset($_SESSION['CustomerID']))
         {
            $id = $_GET['id'];
	 		  $_SESSION['cart'][$id]++;

	       header("location: productlist.php");
         }
         else
         {
            echo '<script>alert("Please log in to buy");window.location.href="index.php";</script>';
            
         }
	 
?>