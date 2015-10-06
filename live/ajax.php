<?php
require ('../config/config.php');
//require ('../includes/authcheck.php');

?>
<HTML>
<head><meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href='../styles/admin.css.php' rel='stylesheet' type='text/css'>
<title>Random Name Generator | Browser </title>
<script src='../includes/jquery.min.js'></script>
</head>
<body style="margin:0px; padding:0px;">
<?

if(isset($_POST['Action'])){

///////////\\\\\\\\\\
// Populate Groups \\
///////////\\\\\\\\\\

if($_POST['Action'] == 'populategroups'){
$query = mysqli_query($con, "SELECT * FROM `$SQLDB`.`esigns` WHERE `esigns`.`esign_id` = $EsignID;") or die ('Unable to execute query. '. mysqli_error($con));
if (mysql_num_rows($query) < 1) {
		echo "<div class='ListItem'><span style='text-align:center'>Database contains no groups, use the + button to add one!</span><p class='clear'</p></div>";
}
else {
	while($result = mysqli_fetch_array($query)){
	echo "<div class='ListItem'><div class='ListName'>" . $result['Name'] . "</div><div class='ListDescription'>" . $result['Description'] . "</div><div class='ListTools'>Tools</div><p class='clear'</p></div>";
	}
}
}






}
if(isset($_GET['Action'])){

//////////\\\\\\\\\
// Create Editor \\
//////////\\\\\\\\\

}

?>
</body>
</HTML>