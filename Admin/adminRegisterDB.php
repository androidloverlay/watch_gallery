<?php

/*$AdminID=$_POST["AdminID"];*/
$AdminName=$_POST["AdminName"];
$Password=$_POST["Password"];
$ConfirmPassword=$_POST["ConfirmPassword"];

include("Computerdb.php");

/*if($AdminID=="")
{
	echo '<script>alert("Please Fill AdminID");window.location.href="adminregister.php";</script>';
}*/
if ($AdminName=="") {
	echo '<script>alert("Please Fill AdminName");window.location.href="adminregister.php";</script>';
}
elseif($Password=="")
{
	echo '<script>alert("Please Fill Password");window.location.href="adminregister.php";</script>';
}
elseif ($Password != $ConfirmPassword) {
	echo '<script>alert("Do not match your Password");window.location.href="adminregister.php";</script>';
}
else
{
	$str= "Insert into tbl_adminregister (AdminName,Passwords) Values ('$AdminName','$Password')";
	$tres = mysql_query($str,$conn);
if($tres > 0)
{   
	echo '<script>alert("Success !");window.location.href="index.php";</script>';
}
else
{
	echo '<script>alert("not Success !");window.location.href="register.php";</script>';
}
}

?>