<?php
require ('../config/config.php');
?>
.truncate {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

#MenuWrapper {
	position:fixed;
top:0px;
left:0px;
width:100%;
box-shadow:#999 0px 0px 5px;
}
#TopMenu {
Height:30px;
padding:10px;
background-color: #0c2d4e!important;
}
#logo {
width:20%;
float:left;
padding-right:10px;
color:#fff;
font-size:14px;
}
#logo img {
Max-height:30px;
padding-right:10px;
}
#SeachContainer {
width:59%;
float:left;
text-align:center;
height:30px;
}
.SearchBox {
width:400px;
height:30px;
margin:0px;
padding:0px;
padding-left:10px;
border-top-left-radius:2px;
border-bottom-left-radius:2px;
border:0px solid #649ffc;
-webkit-transition: 0.5s;
-moz-transition: 0.5s;
transition: 0.5s;
}

.SearchBoxStandard {
background:#244260;
color:#fff;
}
/*.SearchBoxLight {
background:#70a6ff;
color:#fff;
}*/
.SearchBoxLight {
background:#556C83;
color:#fff;
}
.SearchBoxClicked {
background:#fff;
color:#000;
}
.SearchButton {
padding:0px;
margin:0px;
margin-right:-5px;
height:30px;
width:80px;
border-top-right-radius:2px;
border-bottom-right-radius:2px;
font-size:12px;
border:0px solid #103152;
border-bottom:0px solid #103152;
position:relative;
left:-5px;
top:0px;
-webkit-transition: 0.5s;
-moz-transition: 0.5s;
transition: 0.5s;
}
.SearchButtonStandard {
background-color:#244260;
color:#fff;
}
.SearchButtonLight {
background-color:#556C83;
color:#fff;
}
.SearchButtonClicked {
background-color:#fff;
color:#000;
}
#LogoutSection {
float:right;
text-align:right;
width:20%;
color:#fff;
font-size:14px;
padding-top:7px;
}
#LogoutSection a{
color:#fff;
font-size:14px;
textdecoration:none;
}
/*
Original colours.
#MainMenu {
height:50px;
padding-top:8px;
padding-left:10px;
background: #4285F4;
border-top:1px solid #649ffc;
border-bottom:1px solid #2566ce;
}
*/
#MainMenu {
height:50px;
padding-top:8px;
padding-left:10px;
background: #556C83;
border-top:1px solid #808382;
border-bottom:1px solid #4A4A49;
}
#Path {
color:#fff;
font-size:24px;
margin-top:5px;
}
#Functions {
color:#fff;
font-size:15px;
padding-top:10px;
}
#Functions a{
color:#fff;
font-size:15px;
display:block;
float:left;
text-decoration:none;
padding-right:20px;
}
#ContentWindow {
Float:left;
/*width:80%;*/
overflow-y:auto;
background:#fbfbfb;
}
#InfoWindow {
Float:left;
width:299px;
background:#eee;
overflow-y:auto;
}
#InfoWindowContainer {
border-left:1px solid #ddd;
border-top:1px solid #fff;
padding:10px;
}

#InfoLocation {
font-size:24px;
padding-bottom:10px;
padding-left:10px;
border-bottom:1px solid #777;
}

.InfoOptionsAndAudit {
width:50%;
padding-top:10px;
padding-bottom:10px;
float:left;
text-align:center;
cursor:pointer;
}

.InfoTextBox {
border:0px none;
background:#eee;
width:160px;
font-size:12px;
}

.InfoLabel {
font-size:14px;
}

.InfoButton {
padding:10px;
margin:10px;
width:200px;
border-radius:2px;
font-size:12px;
}

.InfoButtonBlue {
color:#fff;
background-color:#297acc;
border:0px solid #103152;
border-bottom:1px solid #103152;
border-top:1px solid #297ac0;
}

.InfoButtonRed {
color:#fff;
background-color:#d33232;
border:0px solid #aa2727;
border-bottom:1px solid #aa2727;
border-top:1px solid #f24343;
}

.TabSelected {
font-weight:bold;
border-top:3px solid #297acc;
padding-top:7px;
}

.EsignContainerPlus {
float:left;
width: 200px;
height:235px;
background-color:white;
background-image:url('../styles/images/plussign.png');
background-repeat:no-repeat;
background-position: center center;
border:1px dashed #bbb;
margin:20px;
-webkit-transition: 1s;
-moz-transition: 1s;
transition: 1s;
overflow:hidden;
cursor:copy;
}
.EsignContainerplus img{
height:260px;
}

.EsignContainer {
float:left;
width: 200px;
height:235px;
background:#fff;
border:1px solid #bbb;
margin:20px;
-webkit-transition: 1s;
-moz-transition: 1s;
transition: 1s;
overflow:hidden;
}
.EsignContainerSelected {
float:left;
width: 200px;
height:235px;
background:#fff;
border:1px solid #297acc;
margin:20px;
box-shadow:0px 0px 20px #297acc;
-webkit-transition: 0.2s;
-moz-transition: 0.2s;
transition: 0.2s;
overflow:hidden;
}
.EsignContainerContent {
height:180px;
overflow:hidden;
}

.EsignContainerContent img{
height:180px;
}

.EsignContainerDescription {
height:40px;
font-size:12px;
background:#777;
color:#fefefe;
padding:10px;
}

body {
background: rgb(249,249,249); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(249,249,249,1) 0%, rgba(239,239,239,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(249,249,249,1)), color-stop(100%,rgba(239,239,239,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(249,249,249,1) 0%,rgba(239,239,239,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(249,249,249,1) 0%,rgba(239,239,239,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(249,249,249,1) 0%,rgba(239,239,239,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(249,249,249,1) 0%,rgba(239,239,239,1) 100%); /* W3C */

	background-attachment:fixed;
	font-family:Roboto, sans-serif;
	-webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
}
/*input {
	border-radius:3px;
	background-color:#FFF;
	border:1px solid #666;
	padding-left:5px;
}*/

.bg {
position:fixed;
top:-5px;
left:-5px;
z-index:-999;
width:110%;
height:110%;
}

.footerfill {
height:100%;
width:110%;
position:fixed;
top:200px;
left:-5%;
background:#333;
z-index:-1;
}

input {
outline:0px none;
}

.FormText {
	padding: 10px;
	border:0px;
	border-bottom:2px solid rgb(12, 45, 78);
	margin:5px;
	margin-top:0px;
	font-size:14px;
	background:rgba(255,255,255,0);
	cursor: text;
}

.FormCancel {
	padding: 10px;
	padding-right:0px;
	border:0px;
	margin:0px;
	margin-top:10px;
	margin-right:0px;
	font-size:14px;
	color:rgb(0, 0, 0);
	background:rgba(255,255,255,0);
	cursor: pointer;
	font-weight:600;
}

.FormSubmit {
	padding: 10px;
	padding-right:0px;
	border:0px;
	margin:0px;
	margin-top:10px;
	/*margin-right:0px;*/
	font-size:14px;
	color:rgb(12, 45, 78);
	background:rgba(255,255,255,0);
	cursor: pointer;
	font-weight:600;
}

.group {
background:#aaa;
border:1px solid black;
margin-top:10px;
}
.textbox {
padding: 5px;
border: #ddd 1px solid;
border-radius: 5px;
}
.box {
	color:#000;
	padding:5px;
	border-radius:5px;
	border:1px #999 solid;
	margin:5px;
    font-family: 'Open Sans', sans-serif;
	background-image: linear-gradient(bottom, rgb(224,226,227) 9%, rgb(250,250,250) 62%);
	background-image: -o-linear-gradient(bottom, rgb(224,226,227) 9%, rgb(250,250,250) 62%);
	background-image: -moz-linear-gradient(bottom, rgb(224,226,227) 9%, rgb(250,250,250) 62%);
	background-image: -webkit-linear-gradient(bottom, rgb(224,226,227) 9%, rgb(250,250,250) 62%);
	background-image: -ms-linear-gradient(bottom, rgb(224,226,227) 9%, rgb(250,250,250) 62%);
}
.HeaderBanner {
color:#eee;
font-weight:100;
font-size:40px;
padding-top:50px;
padding-left:10px;
padding-bottom:0px;
margin-bottom:0px;
vertical-align:middle;
}
.SubHeaderBanner {
color:#222;
font-weight:500;
font-size:14px;
}
table {
table-layout:fixed;
}
.tablescroll {
background:#fff;
max-width:100%;
min-width:920px;
padding-left:10px;
padding-right:10px;
position:fixed;
top:10px;
left:0px;
}
.main {
border-top:1px solid #aaa;
border-bottom:1px solid #aaa;
background-color:white;
max-width:100%;
min-width:920px;
padding:10px;
padding-top:10px;
padding-bottom:5px;
box-shadow:#999 1px 1px 5px;
margin-top:20px
}
.menuLocked {
margin-top:0px;
color:#eee;
-webkit-transition: 0.5s;
-moz-transition: 0.5s;
transition: 0.5s;
padding-bottom:8px;
padding-top:8px;
}
.menu {
margin-top:-25px;
color:#333;
-webkit-transition: 0.5s;
-moz-transition: 0.5s;
transition: 0.5s;
padding-bottom:8px;
padding-top:8px;
}
.menu:hover {
margin-top:0px;
color:#eee;
}
#menu {
width:100%;
text-align:right;
background:#333;
position:fixed;
top:0px;
box-shadow:#000 0px 0px 10px;
}
#menu a:link {
text-decoration:none;
padding-left:10px;
color:inherit;
}
#menu a:visited {
text-decoration:none;
color:inherit;
}
#ReportsMenu {
clear:both;
width:95%;
margin:0 auto;
text-align:left;
}
img {
vertical-align:middle;
}
#boxartBrowser {
width:700px;
height:500px;
float:left;
display:none;
}
#overflow {
width:700px;
height:500px;
overflow-y:visible;
overflow-x:hidden;
}
#upload {
border:1px solid #ccc; 
background:#fff; 
padding:5px;
float:right;
width:300px;
}
div#tipDiv {
    background-color:#E1E5F1; 
    border:1px solid #667295;
    padding:4px;
    width:200px;
}
.refresh {
color:#000;
}
.wrapper {
color:#000;

}
.function {
float:left;
z-index:99999999;
}
.function a:link {
display:block;
text-decoration:none;
margin-right:2px;
margin-left:1px;
padding:2px;
padding-bottom:3px;
}
.function input {
display:block;
text-decoration:none;
border:1px #fff solid;
margin-right:2px;
margin-left:1px;
padding-left:30px;
width:100px;
height:30px;
background:url(/ink/icns/calendar2.jpg);
background-repeat:no-repeat;
background-position:left center;
}
#width {
max-width:100%;
padding-left:10px;
padding-right:10px;
}
.datatables_filter {
border-radius:3px;
}
.dataTables_info {
position:relative;
top:-25px;
margin-bottom:-25px;
}
.even:hover {
    background-color:#98eced; 
    border:1px solid #000;
}
.odd:hover {
    background-color:#98eced;
    border:1px solid #000;
}
.StockLowTR {
	background-color:#f75b68;
}
.StockLowTR:hover {
    background-color:#99FF33;
    border:1px solid #000;
}
.tinytext {
font-size:14px;
}
.servermessage {
opacity:0;
margin:0 auto;
background:yellow;
border:1px solid orange;
position:absolute;
text-align:center;
width:200px;
top:5px;
left:50%;
margin-left:-100px;
padding:10px;
-webkit-animation: highlight 4.5s ease-in-out; /* Chrome, Safari, Opera */
    animation: highlight 4.5s ease-in-out;
}
.updatemessage {
opacity:0;
margin:0 auto;
background:yellow;
border:1px solid orange;
text-align:center;
padding:10px;
margin:10px;
-webkit-animation: highlight 4s ease-in-out; /* Chrome, Safari, Opera */
    animation: highlight 4s ease-in-out;
}
@-webkit-keyframes highlight {
    from {opacity: 1;}
    to {opacity: 0;}
}

/* Standard syntax */
@keyframes highlight {
    from {opacity: 1;}
    to {opacity: 0;}
}

#iframewrapper {


background: rgb(249,249,249); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(249,249,249,1) 0%, rgba(239,239,239,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(249,249,249,1)), color-stop(100%,rgba(239,239,239,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(249,249,249,1) 0%,rgba(239,239,239,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(249,249,249,1) 0%,rgba(239,239,239,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(249,249,249,1) 0%,rgba(239,239,239,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(249,249,249,1) 0%,rgba(239,239,239,1) 100%); /* W3C */

	background-attachment:fixed;

padding:0px;
margin:0px;

box-shadow: rgb(0, 0, 0) 0px 0px 20px; 
border-radius: 2px; 
position: fixed; 
left: 50%;
top: 50%;
z-index: 999999; 
-webkit-transition: 0.5s;
-moz-transition: 0.5s;
transition: 0.5s;
}

#grey {
background:#000; 
width:2000; 
height:2000; 
position:fixed; 
left:-5; 
top:-5; 
background:url("<?php echo $Location; ?>/styles/images/50percent.png");
-webkit-transition: 0.5s;
-moz-transition: 0.5s;
transition: 0.5s;
}

.block {
visibility:visible;
opacity:1;
-webkit-transition: 0.5s;
-moz-transition: 0.5s;
transition: 0.5s;
}
.none {
opacity:0;
visibility:hidden;
-webkit-transition: 0.5s;
-moz-transition: 0.5s;
transition: 0.5s;
}

#add {
    background-color: #c51f3e!important;
	text-align:center;
	border:1px solid #c51f3e;
	border-radius:50px;
	color:#fff;
	font-weight:400;
	font-size:50px;
	width:100px;
	position:fixed;
	right:50px;
	bottom:50px;
	cursor:default;
	box-shadow:#999 2px 2px 5px;
	-webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    transition: 0.5s;
	-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
#add:hover {
	box-shadow:#111 2px 2px 15px;
}
#list {
	background-color: #fff;
	border:1px solid #ccc;
	border-bottom:0px;
	width:800px;
	margin: 0 auto;
	margin-top:150px;
	margin-bottom:50px;
	box-shadow:#999 0px 0px 5px;
}
.ListItem {
	border-bottom:1px solid #ccc;
	padding:20px;
	-webkit-transition: 0.1s;
    -moz-transition: 0.1s;
    transition: 0.1s;
	-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.ListItem:hover {
	background-color:#F1FAF6;
}
.ListName {
	Float:left;
	width:200px;
	text-align:left;
	-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.ListDescription {
	Float:left;
	width:200px;
	text-align:left;
	-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.ListTools {
	Float:right;
	width:200px;
	text-align:Right;
	    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.clear {
	clear:both;
	margin:0px;
	padding:0px;
}