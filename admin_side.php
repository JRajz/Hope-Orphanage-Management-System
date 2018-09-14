
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin_Panel</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<style>

.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color:#03F;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width::150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  padding-bottom:25px;
  margin-left:20px;
  border-radius:8px;
  margin-bottom:30px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: ' »';
  position:static;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span:after {
  opacity: 6;
  right: 0;
}
.button1 a
{
	text-decoration:none;
	color:#FFF;
	font-size:20px;
}
.show1
{
	margin-left:500px;
	margin-top:-300px;
}
.mainside
{
	width:auto;
	height:auto;
	margin:20px;
}
</style>
</head>

<body>
<div class="mainside">
<div class="sidepanel">
<button class="button1"  name="view1" onclick="func()">Member Details<span></span></button>
<button class="button1"  name="view1" onclick="func2()">Adoption Details<span></span></button>
<button class="button1"  name="view1" onclick="func3()">Donation Details<span></span></button>

</div>
<div id="see" class="show1">
</div>
</div>
<script>
function func()
{
	$d=document.getElementById("see").value;
	y=new XMLHttpRequest();
	y.onreadystatechange=function()
	{
	  if(y.readyState==4 && y.status==200)
	  {
		  document.getElementById("see").innerHTML=y.responseText;
		  
	  }	
	}
	y.open('GET','adminmem.php',true);
	y.send();
}
function func2()
{
	$d=document.getElementById("see").value;
	y=new XMLHttpRequest();
	y.onreadystatechange=function()
	{
	  if(y.readyState==4 && y.status==200)
	  {
		  document.getElementById("see").innerHTML=y.responseText;
		  
	  }	
	}
	y.open('GET','adminadop.php',true);
	y.send();
}
function func3()
{
	$d=document.getElementById("see").value;
	y=new XMLHttpRequest();
	y.onreadystatechange=function()
	{
	  if(y.readyState==4 && y.status==200)
	  {
		  document.getElementById("see").innerHTML=y.responseText;
		  
	  }	
	}
	y.open('GET','admindon.php',true);
	y.send();
}
</script>
</body>
</html>