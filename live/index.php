<?PHP
require ('../config/config.php');
?>
<HTML>
<head><meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Random Name Generator | &copy; Robin Wright 2015</title>
<link href='../styles/admin.css.php' rel='stylesheet' type='text/css'>
<script>
window.onload = function PageLoaded(){
CreateContainers('populategroups',0);
DefaultPath = document.getElementById("Path").innerHTML;
CurrentlyViewing = "Groups";
}
function CreateContainers(Action,GroupID) {
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
xmlhttp.send("Action=" + Action + "&GroupID=" + GroupID);
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

//Go back to groups after viewing one
function BackToGroups() {
	CurrentlyViewing = "Groups";
	CreateContainers('populategroups',0);
	document.getElementById("Path").innerHTML = DefaultPath
}

//Fill list div with users from doubleclicked group
function OpenGroup(GroupID, GroupName) {
	CurrentlyViewing = "Names";
	CreateContainers('populatenames',GroupID);
	document.getElementById("Path").innerHTML = DefaultPath + ' &rsaquo; ' + GroupName;
}

function openwrapper(url, x, y){
// Show popup elements
document.getElementById('iframewrapper').className='block'; 
document.getElementById('grey').className='block';

// Resize elements
document.getElementById('iframewrapper').style.width="100%";
document.getElementById('iframewrapper').style.height=y + "px";
document.getElementById('Iframe').style.height=(y - 10) + "px";

// Position elements
document.getElementById('iframewrapper').style.marginLeft="-50%";
document.getElementById('iframewrapper').style.marginTop="-" + (y / 2) + "px";
//document.getElementById('iframeX').style.left=(x - 15) + "px";

// Stop scroll event 'bubble'
document.getElementById('Iframe').src = url;
//$('#Iframe').on('mousewheel DOMMouseScroll', function(ev) {
//ev.preventDefault();
//});
}

function closewrapper() { //will close the window without refreshing the page. 
// hide popup elements
document.getElementById('iframewrapper').className='none'; 
document.getElementById('grey').className='none';
}

function reloadparent() { //reloads parent window, for use from wrapper
location.reload();
}
</script>
</head>
<body style="margin:0px; padding:0px;">
<div id="MenuWrapper"><?php require ('../includes/menu.inc');?></div>

<div id='list'>



</div>

<div onclick="openwrapper('ajax.php?Action=Add'+CurrentlyViewing,0,200)" id='add'>+</div>
<!--
###########################################################################
######################### Iframe Section  Start ###########################
###########################################################################
-->

<!-- Grey out background -->
<div id="grey" class='none' onclick="closewrapper();">&nbsp;</div>

<!-- The white box that the window will reside in -->
<div id="iframewrapper" class='none'  style="width: 750px; height: 230px; margin-left: -375px; margin-top: -95px;">



<!-- Actual iFrame container -->
<div id="IframeContainer" style="clear:both; padding:20px; padding-left:0px; margin-top:-25px;">
<iframe id="Iframe" style="margin:10px; height:220px; width:100%;" border="0" frameborder="0"></iframe>
</div>

</div>
 
<!--
###########################################################################
########################## Iframe Section  End ############################
###########################################################################
-->
</body>
</HTML>