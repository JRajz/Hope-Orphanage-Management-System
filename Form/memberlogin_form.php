<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    
    
<style>

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image:url(../images/login/baby.jpeg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 400px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
.sub
{
	background:#03F;
	color:#FFF;
	width:60px;
	font-size:15px;
	font:Georgia, "Times New Roman", Times, serif;
	margin-left:90px;
	border-radius:5px;
}
.sub:hover
{
	background:#000;
	color:#FFF;
	font:Arial, Helvetica, sans-serif;
}
.create
{
}
.create a
{
	font-size:13px;
	font-style:italic;
	color:#00F;
}
.create a:hover
{
	color:#FFF;
	box-shadow:5px #000000;
}
    </style>
  <script>
function val()
{
	var f=0;
	if(document.forms['login']['user'].value=="")
	{
		document.getElementById('nerr').innerHTML="Please enter your username";
		f=1;
	}
	else
	{
		document.getElementById('nerr').innerHTML="";
	}
	if(document.forms['login']['password'].value=="")
	{
		document.getElementById('perr').innerHTML="Please enter your passsword";
		f=1;
	}
	else
	{
		document.getElementById('perr').innerHTML="";
	}
	if(f==1)
	{
		return false;
	}

}
</script>  
    
    
 <script src="../../jquery plugins/Login/random-login-form/js/prefixfree.min.js"></script>

    
  </head>

  <body>
  

    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div><span>Hope</span> Children's Home</div>
		</div>
		<br>
		<div class="login">
        <form method="post" name="login" action="../action/memlogin_action.php" onsubmit="return val()">
				<input type="text" placeholder="username" name="user"><br><i><span id="nerr"></span></i><br>
				<input type="password" placeholder="password" name="password"><br><i><span id="perr"></span></i><br>
<input type="Submit" value="Login" class="sub" name="Login" >
		</form>
        <br>
        <div class="create">
        <a href="../registration_form.php">Create An Account</a>
        </div>
        </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    
  </body>
</html>
