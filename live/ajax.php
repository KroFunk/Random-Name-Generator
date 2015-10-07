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
<?PHP

if(isset($_POST['Action'])){

///////////\\\\\\\\\\
// Populate Groups \\
///////////\\\\\\\\\\

if($_POST['Action'] == 'populategroups'){
$UID = $_SESSION['CUID'];
$query = mysqli_query($con, "SELECT * FROM `groups` WHERE `UserID` = $UID") or die ('Unable to execute query. '. mysqli_error($con));
if (mysqli_num_rows($query) < 1) {
		echo "<div class='ListItem'><div style='text-align:center'>Database contains no groups, use the + button to add one!</div><p class='clear'></p></div>";
}
else {
	while($result = mysqli_fetch_array($query)){
	echo "<div class='ListItem' ondblclick='OpenGroup(" . $result['GroupID'] . ")' ><div class='ListName'>" . $result['GroupName'] . "</div><div class='ListDescription'>" . $result['Description'] . "</div><div class='ListTools'>Tools</div><p class='clear'</p></div>";
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