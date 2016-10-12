<?php 
	$siteRoot = '/ProjectX';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--Tell IE to use latest rendering engine-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--Set Page width to size of device, and zoom level to 1-->
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<title>Scenema: <?php echo $pageTitle ?></title>
	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="<?php echo $siteRoot ?>/resources/library/bootstrap.min.css">
	<!--jQuery JS-->
	<script src="<?php echo $siteRoot ?>/resources/library/jquery-3.1.1.min.js"></script>
	<!--Bootstrap JS-->
	<script src="<?php echo $siteRoot ?>/resources/library/bootstrap.min.js"></script>
	<!--MAIN Stylesheet-->
	<link rel="stylesheet" href="<?php echo $siteRoot ?>/css/main.css">
	<!--PgwSlider-->
	<link rel="stylesheet" href="<?php echo $siteRoot ?>/resources/library/PgwSlider/pgwslider.css">
	<script src="<?php echo $siteRoot ?>/resources/library/PgwSlider/pgwslider.js"></script>
	<script>
		$(document).ready(function() {
	    	$('.pgwSlider').pgwSlider();
		});
	</script>
</head>
<body>

<div class="container"><!--open .container-->
<div className="row">

	<header>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand logoImg" href="<?php echo $siteRoot ?>/index.php"><img alt="Brand" class ="logoImg" src="<?php echo $siteRoot ?>/img/logo.png"></a>
		      <a class="navbar-brand" href="<?php echo $siteRoot ?>/index.php">Scenema</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="<?php echo ($pageTitle == "Home" ? "active" : "")?>"><a href="<?php echo $siteRoot ?>/index.php">Home <?php echo ($pageTitle == "Home" ? '<span class="sr-only">(current)</span>' : "")?></a></li>
		        <li class="<?php echo ($pageTitle == "Movies" ? "active" : "")?>"><a href="<?php echo $siteRoot ?>/pages/movies.php">Movies<?php echo ($pageTitle == "Movies" ? '<span class="sr-only">(current)</span>' : "")?></a></li>
		        <li class="<?php echo ($pageTitle == "Offers" ? "active" : "")?>"><a href="<?php echo $siteRoot ?>/pages/offers.php">Offers<?php echo ($pageTitle == "Offers" ? '<span class="sr-only">(current)</span>' : "")?></a></li>
		        <li class="<?php echo ($pageTitle == "S-Squad" ? "active" : "")?>"><a href="<?php echo $siteRoot ?>/pages/ssquad.php">S-Squad<?php echo ($pageTitle == "S-Squad" ? '<span class="sr-only">(current)</span>' : "")?></a></li>
		        <li class="<?php echo ($pageTitle == "About" ? "active" : "")?>"><a href="<?php echo $siteRoot ?>/pages/about.php">About<?php echo ($pageTitle == "About" ? '<span class="sr-only">(current)</span>' : "")?></a></li>
		        
		      </ul>
		      
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	
	</header>

	