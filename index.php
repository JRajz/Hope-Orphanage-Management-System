<?php
session_start();
if(isset($_SESSION['user']))
{
	include "header2.php";
	include "home.php";

}
else if(isset($_SESSION['admin']))
{
	include "header2.php";
	include "home.php";

}
else
{
	include "header1.php";
	include "home.php";

}
?>