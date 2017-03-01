<?php

/*$customerID=$_POST["customerID"];*/
$customerName=$_POST["customerName"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["password"];
$Confirmpassword=$_POST["Confirmpassword"];

include("Computerdb.php");

/*if($customerID=="")
{
	echo '<script>alert("Please Fill customerID");window.location.href="register.php";</script>';
}*/
if ($customerName=="") {
	echo '<script>alert("Please Fill customerName");window.location.href="register.php";</script>';
}
elseif($address=="")
{
	echo '<script>alert("Please Fill address");window.location.href="register.php";</script>';
}
elseif($phone=="")
{
	echo '<script>alert("Please Fill phone");window.location.href="register.php";</script>';
}
elseif($email=="")
{
	echo '<script>alert("Please Fill email");window.location.href="register.php";</script>';
}
elseif($password=="")
{
	echo '<script>alert("Please Fill password");window.location.href="register.php";</script>';
}
elseif ($password!=$Confirmpassword) {
	echo '<script>alert("Do not match your Passwords");window.location.href="register.php";</script>';
}
else
{
$str= "Insert into tbl_customers(CustomerName,Address,Phone,Email,Passwords) Values ('$customerName','$address','$phone','$email','$password')";
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