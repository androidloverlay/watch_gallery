<?php
session_start();
include("Computerdb.php");

$email=$_POST["Email"];
$Password=$_POST["Password"];

$str="SELECT CustomerID FROM tbl_customers WHERE Email='$email' and Passwords='$Password'";
$res=mysql_query($str,$conn);
$row=mysql_fetch_array($res);
					if (mysql_num_rows($res)>0)
					{
					  echo '<script>alert("Login Success!");window.location.href="productlist.php";</script>';
					  $_SESSION['CustomerID'] = 'CustomerID';
					}
					else
					{						
						echo '<script>alert("You failed  to  logged in!");window.location.href="index.php";</script>';
					}
?>