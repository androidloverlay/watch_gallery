<?php 
	include("Computerdb.php");
	$id = $_POST['CategoryID'];
	echo $id;
	/*$str="SELECT * FROM tbl_products Where Category = '$id'";
	$res=mysql_query($str);
						
	if($res > 0)
	{   
		echo '<script>alert("Success !");window.location.href="index.php";</script>';
		echo "sucess";
	}
	else
	{
		echo '<script>alert("not Success !");window.location.href="register.php";</script>';
	}*/
?>