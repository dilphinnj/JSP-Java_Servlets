<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<style type="text/css">
<!--
body {
	background-color: #FFF;
	text-align: center;
	color: #FFF;
	font-size: large;
}
a:hover {
	color: #000;
}
.backg tr td {
	text-align: center;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.backg {
	text-align: left;
}
.backg tr td #MenuBar1 li {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.backg tr td #MenuBar1 li {
	color: #FFF;
	width: auto;
}
.backg tr td {
	font-family: Calibri, "Calisto MT";
	color: #000;
}
.backg {
	font-family: Georgia, "Times New Roman", Times, serif;
}
.backg {
	font-family: Verdana, Geneva, sans-serif;
}
.backg tr td #form1 p label {
	color: #000;
}
.backg tr td #form1 p label {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
.backg tr td #form1 p label {
	color: #000;
}
.backg tr td #form1 p label {
	font-family: Calibri, "Calisto MT";
}
.backg tr td #form1 p {
	color: #000;
}
.backg tr td table {
	font-family: Calibri, "Calisto MT";
	color: #000;
}
.headform {
	color: #000;
}
.backg tr td table #form1 tr td {
	text-align: left;
}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>


<script type="text/javascript">



function emailcheck(){
	if(form1.email.value.indexOf("@")==-1 || form1.email.value.indexOf(".")== -1){
		window.alert("type valid email");
		return false;
	}
}

function validation(){
	if(form1.name.value==""){
		window.alert("fill the name");
		form1.name.focus();
		return false;
	}
	
	else if(!isNaN(form1.name.value)){
		window.alert("Numbers not allowed!")
		form1.name.focus();
		return false;
		
	}
	
	else if(form1.add.value==""){
		window.alert("Enter the address");
		form1.name.focus();
		return false;
		
	}
	
	else if(form1.email.value==""){
		window.alert("Enter your e-mail");
		form1.email.focus();
		return false;	
		
}
		
	else if(form1.city.value==""){
		window.alert("Enter your City");
		form1.city.focus();
		return false;	
		
		}
		
	else if(isNaN(form1.tel.value)){
		window.alert("Enter valid tel number");
		form1.tel.focus();
		return false;
	
	}
	
	
}
		
</script>



<body bgcolor="#FFFFFF" text="#666666" alink="#666666">
<table width="800" height="771" align="center" cellpadding="0" cellspacing="0" class="backg">
  <tr>
    <td height="254" colspan="5" valign="top"><img src="logo.jpg" width="800" height="250" /></td>
  </tr>
  <tr bgcolor="#000000" style="font-family: 'Comic Sans MS', cursive">
    <td width="172" height="39" valign="top">Home</td>
    <td width="153" valign="top">About Us</td>
    <td width="167" valign="top">Contact Us</td>
    <td width="161" valign="top">Prices</td>
    <td width="147" valign="top">Login / Register</td>
  </tr>
  <tr bgcolor="#FFFF99">
    <td height="400" align="left" valign="top"><ul id="MenuBar1" class="MenuBarVertical">
      <li><a href="#" class="MenuBarItemSubmenu">Gents</a>
        <ul>
          <li><a href="#">Transportation</a></li>
          <li><a href="#">Electronics</a></li>
          <li><a href="#">Sports &amp; Leisure</a></li>
          </ul>
        </li>
      <li><a href="#" class="MenuBarItemSubmenu">Ladies</a>
        <ul>
          <li><a href="#">Beauty Culture</a></li>
          <li><a href="#">Sports &amp; Leisure</a></li>
          </ul>
        </li>
      <li><a class="MenuBarItemSubmenu" href="#">Kids</a>
        <ul>
          <li><a href="#">Education</a>            </li>
          <li><a href="#">Toys</a></li>
  </ul>
        </li>
      <li><a href="#" class="MenuBarItemSubmenu">Young</a>
        <ul>
          <li><a href="#" style="font-size: small;">IT</a></li>
          <li><a href="#">Communication</a></li>
          </ul>
        </li>
  </ul>
      <p style="text-align: left; color: #000;">&nbsp;</p>
    <p>&nbsp;</p></td>
    <td height="400" colspan="4" align="left" valign="top">
    
    
    
    
    

<p class="headform">&nbsp;</p>
<p class="headform">Please send us your query below :-
  
  
  
</p>
<p>

<form action="displaydata.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>




</p></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td height="55" colspan="5" align="left" valign="top" style="color: #333; font-size: small;">Copy rights @ FLEX ADDS (Pvt) Ltd 2013.</td>
  </tr>
</table>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});  

-->
</script>

 



</body>
</html>
