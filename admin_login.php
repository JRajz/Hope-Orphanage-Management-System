<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin_Login</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    
        <style>
      
body {

  background:;
  background-repeat:no-repeat;

}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  margin-top:15%;
}

.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading input#sub {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading input#sub .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok input#sub {
  background-color: #8bc34a;
}
.login.ok input#sub .spinner {
  border-radius: 0;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
.login input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}

.login input:focus {
  outline: none;
  color:#03F;
  border-color:#03F;
  border-left-width: 35px;
}
.login .title {
  color:#03F;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
  font-family:Georgia, "Times New Roman", Times, serif
}
.login input#sub {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background:#03F;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}
.login input#sub .spinner {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  border: 4px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 50%;
  top: 0;
  opacity: 0;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) input#sub:hover {
  box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) input#sub:focus {
  border-bottom-width: 4px;
}

    </style>

    
        <script src="../others/sadhya2/js/prefixfree.min.js"></script>
        <script>
        function valid()
{
var x=document.forms['login']['uname'].value;
var y=document.forms['login']['password'].value;
var f=0;
if(x==" "||x==0)
{
	
	document.getElementById("nerr").innerHTML="enter the name field";
	f=1;
}
else
{
	document.getElementById("nerr").innerHTML="";
}

if(y==" "||y==0)
	{
		document.getElementById("perr").innerHTML="enter the password field";
		f=1;
	}
	else
{
	document.getElementById("perr").innerHTML="";
}
if(f==1)
{
	return false;
}
}

</script>
    
  </head>

  <body>

    <div class="wrapper">
  <form class="login" name="login" action="admin_login.php" onSubmit="return valid()" method="post">
    <center class="title">Log in</center>
    <input type="text" placeholder="Username" autofocus name="uname"/>
    <input type="password" placeholder="Password" name="password" />
   <input  type="submit" value="Login" class="spinner state" id="sub">
  </form>
</div>
 <script src="../others/sadhya2/js/index.js"></script>

 <?php
 include_once 'session.php';
$f=0;
if(isset($_POST['uname']))
{
$con=mysqli_connect('localhost','root','','orphan');
$sql="SELECT * FROM `admin_table`";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result))
{
	if(strcmp($_POST['uname'],$row['Username'])==0)
	{
		 if( strcmp($_POST['password'],$row['Password'])==0)
	{
		$_SESSION['admin']=$row['Username'];
		$f=1;
	}
	}
}
	if($f==1)
	header("Location:admin_panel.php",true);
	else
	echo "<center>"."incorect username or password"."</center>";		
}
?>
   
    
    
  </body>
</html>
