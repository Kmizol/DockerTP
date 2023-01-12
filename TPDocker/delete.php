<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//display delete message
echo "<font color='green'>Data deleted successfully.";
echo "<br/><a href='index.php'>View Result</a>";

?>

