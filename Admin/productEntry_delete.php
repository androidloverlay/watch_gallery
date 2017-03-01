<?php
include("Computerdb.php");
	$ProductID=$_GET["id"];

	$str= "DELETE from tbl_products Where ProductID = '$ProductID'";
	$tres = mysql_query($str,$conn);
if($tres > 0)
{   
	echo '<script>alert("Success !");window.location.href="manage-product.php";</script>';
}
else
{
	echo '<script>alert("not Success !");window.location.href="register.php";</script>';
}
?>