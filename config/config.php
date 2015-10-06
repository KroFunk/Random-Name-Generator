<?php 
session_start();

//SQL connection details
$SQLServer="localhost";
$SQLUser="root";
$SQLPass="root";
$SQLDB="randomnames";

//URL Setting (no trailing slash!)
$Location = "http://localhost/Random-Name-Generator/Random-Name-Generator";

//########################################################################################
//###################### Nothing should be changed below this point ######################
//########################################################################################

//Attempting to connect to db
$con=mysqli_connect($SQLServer,$SQLUser,$SQLPass,$SQLDB);
//check if the connection was sucessful (Fingers Crossed)
if (mysqli_connect_errno())
{
echo "Connection to the database fell over: " . mysqli_connect_error();
}

?>