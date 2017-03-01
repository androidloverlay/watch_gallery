<?php

$categorydesc = $_POST["Categorydesc"];
$CategoryName=$_POST["CategoryName"];


include("Computerdb.php");


	$str= "Insert into tbl_category (CategoryName,CategoryDescription) Values ('$CategoryName','$categorydesc')";
	$tres = mysql_query($str,$conn);
if($tres > 0)
{   
	echo '<script>alert("Success !");window.location.href="CategorySetup.php";</script>';
}
else
{
	echo '<script>alert("not Success !");window.location.href="register.php";</script>';
}


?>