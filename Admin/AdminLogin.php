<?php

include("Computerdb.php");
$adminName=$_POST["AdminName"];
$password=$_POST["Password"];


$str="SELECT AdminID FROM tbl_adminregister WHERE AdminName='$adminName' and Passwords='$password'";
$res=mysql_query($str,$conn);
$row=mysql_fetch_array($res);

if (mysql_num_rows($res)>0)
					{
					  echo '<script>alert("Login Success!");window.location.href="ProductEntry.php";</script>';
					}
					else
					{						
						echo '<script>alert("You failed  to  logged in!");window.location.href="index.php";</script>';
					}
?>