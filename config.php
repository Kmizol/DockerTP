<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */



$mysqli = mysqli_connect("db","leuseur" ,"lepassword","test"); 
 
if(!$mysqli)
{
	die("Failed to connect to MySL :");
}
else
{
echo "db connect";
}

?>
