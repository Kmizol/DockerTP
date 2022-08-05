<?php


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
