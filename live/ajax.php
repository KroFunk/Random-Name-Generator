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
	echo "<div class='ListItem' ondblclick='OpenGroup(" . $result['GroupID'] . "," . '"' . $result['GroupName'] . '"' . ")' ><div class='ListName'>" . $result['GroupName'] . "</div><div class='ListDescription'>" . $result['Description'] . "</div><div class='ListTools'>Tools</div><p class='clear'</p></div>";
	}
}
}



//////////\\\\\\\\\\
// Populate Names \\
//////////\\\\\\\\\\

if($_POST['Action'] == 'populatenames' & isset($_POST['GroupID'])){
$GroupID = $_POST['GroupID'];
$query = mysqli_query($con, "SELECT * FROM `names` WHERE `GroupID` = $GroupID") or die ('Unable to execute query. '. mysqli_error($con));
if (mysqli_num_rows($query) < 1) {
		echo "<div class='ListItem'><div style='text-align:center'>This group contains no names, use the + button to add one!</div><p class='clear'></p></div>";
}
else {
	while($result = mysqli_fetch_array($query)){
	echo "<div class='ListItem'><div class='ListName'>" . $result['Name'] . "</div><div class='ListDescription'>" . "</div><div class='ListTools'>Tools</div><p class='clear'</p></div>";
	}
}
}


}
if(isset($_GET['Action'])){

//////////\\\\\\\\\
// Create Editor \\
//////////\\\\\\\\\

if($_GET['Action'] == 'AddGroups'){
	echo "<form action=''>
	<table>
	<tr>
	<td style='text-align:right;'><label>Group Name:</label></td>
	<td><input type='textbox' name='groupname' /></td>
	</tr><tr>
	<td style='text-align:right;'><label>Group Description:</label></td>
	<td><input type='textbox' name='description' /></td>
	</tr><tr>
	<td colspan='2' style='text-align:right;'><input type='button' value='Create Group'></td>
	</tr>
	</table>";
}

}

?>
</body>
</HTML>