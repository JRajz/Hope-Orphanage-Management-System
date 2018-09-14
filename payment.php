<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>

function val()
{
	var f=0;
	
	if(document.forms['pay']['bank'].value=="")
	{
		f=1;
		document.getElementById('bnerr').innerHTML="Please select the bankname";
    }
	else
	{
		document.getElementById('bnerr').innerHTML="";
	}
	

	
	if(document.forms['pay']['accno'].value=="")
	{
		f=1;
		document.getElementById('acerr').innerHTML="Please enter the account number";
    }
	else
	{
		document.getElementById('acerr').innerHTML="";
	}
	

	if(document.forms['pay']['un'].value=="")
	{
		f=1;
		document.getElementById('unerr').innerHTML="Please enter the username";
    }
	else
	{
		document.getElementById('unerr').innerHTML="";
	}
	

	if(document.forms['pay']['pass'].value=="")
	{
		f=1;
		document.getElementById('pserr').innerHTML="Please enter the password";
    }
	else
	{
		document.getElementById('pserr').innerHTML="";
	}



}
</script>
<style>
</style>
</head>
<?php
include 'header1.php';
?>

<body>
<div style="background-color:#FFF; margin-left: auto; margin-right: auto; width:700px; padding:20px">
<div style="margin-left:auto; margin-right:auto; background:#FFC; width:400px;; box-shadow:3px 3px 3px #333333"">
<?php
include_once 'session.php';
$con=mysqli_connect('localhost','root','','dontab');
$uid=$_SESSION['uid'];
$sql="select *from order_table where user_id='$uid' and delivery='No'";
$result=mysqli_query($con,$sql);
$tot=0;
echo "<table width='400px'><tr>";
echo "<th>Item</th>";
echo "<th>Quantity</th>";
echo "<th>Price</th>";
echo "<th>Amount</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
	echo '<tr>';
	echo '<td align="center">'.$row['item'].'</td>';
	echo '<td align="center">'.$row['quantity'].'</td>';
	echo '<td align="center">'.$row['payment'].'</td>';
	$amt=$row['quantity']*$row['payment'];
	$tot=$tot+$amt;
	echo '<td align="center">'.$amt.'</td>';
	echo '</td>';
	echo '</tr>';
}
echo "<tr>".'<th colspan="3" align="right">';
echo "Total :</th>";
$_SESSION['Amnt']=$tot;
echo "<th>$tot</th></tr>";
echo "</table>"
?>

</div>
<div style="margin-left:auto; margin-right:auto; width:400px;">
<form method="post" action="file:///D|/mrcake/paymentcode.php" name="pay" onsubmit="return val()">
<table>
<tr><td>Bank</td><td><select name="bank">
<option value="SBI">SBI</option>
<option value="SBT">SBT</option>
<option value="ICICI">ICICI</option>
<option value="FEDERAL">FEDERAL</option>

</select>
<font color="#FF0000"><span id="bnerr"></span></font>
</td></tr>
<tr><td>Account number</td><td><input type="text" name="accno"/>
<font color="#FF0000"><span id="acerr"></span></font></td></tr>
<tr><td>User name</td><td><input type="text" name="un"/>
<font color="#FF0000"><span id="unerr"></span></font></td></tr>
<tr><td>Password</td><td><input type="password" name="pass"/>
<font color="#FF0000"><span id="pserr"></span></font></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit"/></td></tr>
</table>
</form>
</div>
</div>




</body>
<?php
include 'file:///D|/mrcake/footer.php';
?>
</html>