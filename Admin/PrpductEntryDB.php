<?php
/*$ProductID=$_POST["ProductID"];*/
$ProductName=$_POST["ProductName"];
$ModelNo=$_POST["ModelNo"];
$Price=$_POST["Price"];
$Category=$_POST["CategoryID"];
/*$img1=$_FILES["ff"]["name"];*/
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];


include("Computerdb.php");

	move_uploaded_file($tmp, "image/$cover");
   
	$str= "INSERT into tbl_products (ProductName,ModelNo,Price,Category,Image) Values ('$ProductName',
	'$ModelNo','$Price','$Category',
	'$cover')";
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