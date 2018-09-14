<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hope Children's Home </title>

<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:2200,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
<style>
.img007
{
	float:left;
}
.fntcls
{
	color:#06F;
	font-size:60px;
	margin-top:70px;
}

</style>

</head>
<body class="homepage">

<div id="tooplate_wrapper1" align="center">
	<div id="tooplate_header">
    <div class="img007"><img src="hopehm.jpg" width="173" height="93" /></div>
   	 <br /><br />
    	<p><font class="fntcls"><b>HOPE CHILDREN'S HOME</b></font></p>
    	<div class="cleaner"></div>
    </div>
    
    <div id="tooplate_menu" align="center">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="action/gallery_action.php">Gallery</a></li>
            <li><a href="Form/donation_form.php">Donation</a></li>
            <li><a href="adoption.php">Adoption</a></li>
           	<li><a href="child.php">Child Labour</a></li>
            <li><a href="eductn.php">Child Education</a></li>
             <li><a href="aboutus.php">AboutUs</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="action/logout.php">Logout</a></li>
    
        </ul>    	
        
<div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
       
    <div id="tooplate_middle">
    
        <div id="slider">
            <a href="#"><img src="images/slideshow/ado.jpg"/></a>
            <a href="#"><img src="images/slideshow/cha.jpg"/></a>
            <a href="#"><img src="images/slideshow/han.jpg"/></a>
            <a href="#"><img src="images/slideshow/ma.jpg" /></a>
        </div>
	</div>
   </div>
    </div>                
   

</body>
</html>