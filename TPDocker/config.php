<?php


$mysqli = mysqli_connect("db","[NOM_UTILISATEUR]" ,"[MDP_UTILISATEUR]","test"); 
 
if(!$mysqli)
{
	die("Failed to connect to MySL :");
}
else
{
echo "db connect";
}

?>
