<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
</head>

<body>
<form name="login" action="action/loginaction.php" method="post" onsubmit="return val() " >
<input type="text" name="user" /><i><span id="nerr"></span></i>
<input type="password" name="password" /><i><span id="perr"></span>
<input type="submit" value="submit" />
</form>
</body>
</html>