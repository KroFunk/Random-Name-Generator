<?PHP
require ('../config/config.php');
?>
<HTML>
<head><meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Random Name Generator | &copy; Robin Wright 2015</title>
<link href='../styles/admin.css.php' rel='stylesheet' type='text/css'>
<script>
window.onload = function PageLoaded(){
	CreateContainers();
}
function CreateContainers() {
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("list").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("POST","ajax.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("Action=<?PHP echo $_GET['Action']?>");
}

//Searchbox aesthetics
var BnClicked = false;
function HoverSearch(status) {
if(status === "blur"){
BnClicked = false;
document.getElementById("SearchBox").className = "SearchBox SearchBoxStandard";
document.getElementById("SearchButton").className = "SearchButton SearchButtonStandard";
}
if(status === "on" && BnClicked === false) {
document.getElementById("SearchBox").className = "SearchBox SearchBoxLight";
document.getElementById("SearchButton").className = "SearchButton SearchButtonLight";
}
else if (status === "off" && BnClicked === false){
document.getElementById("SearchBox").className = "SearchBox SearchBoxStandard";
document.getElementById("SearchButton").className = "SearchButton SearchButtonStandard";
}
else if (status === "clicked"){
document.getElementById("SearchBox").className = "SearchBox SearchBoxClicked";
document.getElementById("SearchButton").className = "SearchButton SearchButtonClicked";
BnClicked = true;
}
}


function OpenGroup(GroupID) {
	//do some mad cool stuff.
	alert('You doubleclicked ' + GroupID);
}
</script>
</head>
<body style="margin:0px; padding:0px;">
<div id="MenuWrapper"><?php require ('../includes/menu.inc');?></div>

<div id='list'>



</div>

<div id='add'>+</div>
</body>
</HTML>