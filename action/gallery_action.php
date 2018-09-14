<html>
<head>
<title>Gallery</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<script src="../js/jquery-1.11.0.min.js"></script>

<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Kreon:400,700,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<!--light-box-files -->
		<script src="../js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
		</script>

<script src="../js/bootstrap.min.js"></script>
<style>
.pics
{
	width:320px;
	height:260px;
	padding:10px;
}
.ig
{
	height:240px;
	width:300px;
}
</style>
</head>

<body>
<?php
if(isset($_POST['Des']))
{

$con=mysqli_connect('localhost','root','','orphan');
$sql1="SELECT * FROM `galtab`";
$result1=mysqli_query($con,$sql1);
while($row=mysqli_fetch_assoc($result1))
{
        $pic=$row['imgname'];
        $imgcd=$row['imgcd'];
		
echo "<div class='img'>";
echo "<a target='_blank' href='gallery.php?imgcd=$imgcd'>";
echo "<img src='gal/$pic' width='125px' height='125px'>";echo"</a>";echo"<br />
";
echo "<div class='name'>".$row['imgdes']."</div>"."</div>";
}
}
else
{
$con=mysqli_connect('localhost','root','','orphan');	
$sql1="SELECT * FROM `galtab`";
$result1=mysqli_query($con,$sql1);
echo"<div class='gallery' id='gallery'>
	<div class='container'>
	  <div class='gallery-main'>
	  	<div class='gallery-top'>
	  		<h2>Our Activity</h2>
	  	</div>";
while($row=mysqli_fetch_assoc($result1))
{
		$pic=$row['imgname'];
        $id=$row['imgcd'];
	echo"<div class='gallery-bott'>
			<div class='col-md-4 col1 gallery-grid'>";	
			
echo"<a href='gal/$pic' w rel='title' class='b-link-stripe b-animate-go  thickbox'>";
echo"<figure class='effect-bubba'>";
echo"<div class='pics'>";
	echo"<img class='img-responsive ig' src='gal/$pic' alt=''>";
	echo"</div>";
	echo"<figcaption>
	<h4 class='gal'>";
	echo"<div></div>";
	echo"</h4>"; 

	echo"<p class='gal1'>".$row['imgdes']."</p></figcaption></figure>";
echo"</a>";echo"<br />";

echo"<div style='clear:both'></div>";

include_once 'session.php';
	if(isset($_SESSION['admin']))
	{
	echo '<input style="float:right" type="button"  onclick="del('.$id.')" value="DELETE">';
	}
	else if(isset($_SESSION['user']))
	echo"";
echo"</div>";

echo"</div>";


}
echo"</div></div></div></div>";
}
?>
<script>
function del($id)
{
var a="delfile.php?imgcd="+$id;
	location.href=a;
}

</script>
</body>
</html>