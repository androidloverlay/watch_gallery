<?php

/* $conn=mysql_connect("localhost","root","","") or die("Can't connect to database!");
 mysql_select_db("thewatchgallery"); */

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$conn=mysql_connect($server, $username, $password, $db) or die("Can't connect to database!");
/* $conn = new mysqli($server, $username, $password, $db); */
mysql_select_db("thewatchgallery");
?>
