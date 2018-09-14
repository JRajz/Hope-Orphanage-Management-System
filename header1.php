<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="css/boot.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->
<link href="css/newstyle.css" rel="stylesheet" type="text/css" media="all" />

<style>
body {
	
color: #666;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 13px;
	line-height: 1.7em; 
	background-color: #fff;
	background-repeat: repeat-x;
	background-position: top	;

}
</style>


</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-top">
			 <div class="logo" style="margin-left:-200px">
             	<a href="index.php" style="float:right"><h1>Hope<span><font size="+1" color="#FFFFFF">Children's Home</font></span></h1></a>
			 </div>
		
			 <div class="search">
				 <div class="search-box">
					 <div id="sb-search" class="sb-search">
						  <form>
							<input class="sb-search-input" placeholder="search term..." type="search" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						 </form>
					 </div>
				 </div>
			 </div>
			 <div class="clearfix" style="float:none"> </div>
			 <!-- search-scripts -->
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
			<!-- //search-scripts -->
		 </div>
		 <div class="top-menu">
			 <span class="menu">MENU</span>
			 <ul>
			 <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
               <li><a href="Form/memberlogin_form.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>Login</a></li>
             <li><a href="registration_form.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Registration</a></li>
              <li><a href="eductn.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Child Education</a></li>
  			 <li><a href="child.php"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Child Labour</a></li>
	
			 <li><a href="aboutus.php"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>AboutUs</a></li>
			 <li><a href="contactus.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>ContactUs</a></li>
			 </ul>
		 </div>
		</div>
        </div>
        <br>
</body>
</html>