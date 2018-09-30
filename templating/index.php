<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sailor - Bootstrap 3 corporate template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

	<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
	<div id="wrapper">
		<!-- GLOBAL -->
		<?php include 'header.php' ?>
		
		<!-- CUSTOM -->
		<?php if($_GET['kondisi']==1){ ?>
			<?php include 'content.php' ?>
		<?php }else{ ?>
			<?php include 'featured.php' ?>
		<?php }?>
		
		<!-- GLOBAL -->
		<?php include 'footer.php' ?>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<?php include 'script_js.php' ?>

</body>

</html>
