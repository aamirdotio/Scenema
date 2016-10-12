<?php
	$pageTitle = 'Home';
	require_once './resources/templates/header.inc.php';

?>

<div id="featuredCarousel" class="carousel slide" data-ride="carousel"><!--open #featuredCarousel-->
	
	<ol class="carousel-indicators">
		<li data-target="#featuredCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#featuredCarousel" data-slide-to="1"></li>
		<li data-target="#featuredCarousel" data-slide-to="2"></li>
		<li data-target="#featuredCarousel" data-slide-to="3"></li>
	</ol><!--close .carousel-indicators-->

	<div class="caousel-inner"><!--open .carousel-inner-->
		<div class="item active"><!--open .item-->
			<img src="<?php echo $siteRoot ?>/img/featured/kubo.jpg" class="img-responsive" alt="">
			<div class="carousel-caption">
				<h1>Amazing Backgrounds</h1>
				<p>Thousands of Backgrounds for free</p>
				<p><a href="#" class="btn btn-primary btn-sm">Get them Now</a></p>
			</div>

		</div><!--close .item-->
		<div class="item"><!--open .item-->
			<img src="<?php echo $siteRoot ?>/img/featured/kubo.jpg" class="img-responsive" alt="">
			<div class="carousel-caption">
				<h1>Amazing Backgrounds</h1>
				<p>Thousands of Backgrounds for free</p>
				<p><a href="#" class="btn btn-primary btn-sm">Get them Now</a></p>
			</div>
		</div><!--close .item-->
		<div class="item"><!--open .item-->
			<img src="<?php echo $siteRoot ?>/img/featured/kubo.jpg" class="img-responsive" alt="">
			<div class="carousel-caption">
				<h1>Amazing Backgrounds</h1>
				<p>Thousands of Backgrounds for free</p>
				<p><a href="#" class="btn btn-primary btn-sm">Get them Now</a></p>
			</div>
		</div><!--close .item-->
		<div class="item"><!--open .item-->
			<img src="<?php echo $siteRoot ?>/img/featured/kubo.jpg" class="img-responsive" alt="">
			<div class="carousel-caption">
				<h1>Amazing Backgrounds</h1>
				<p>Thousands of Backgrounds for free</p>
				<p><a href="#" class="btn btn-primary btn-sm">Get them Now</a></p>
			</div>
		</div><!--close .item-->
	</div><!--close .carousel-inner-->

	<a class="left carousel-control" href="#featuredCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-cheveron-left"></span>
	</a>

	<a class="right carousel-control" href="#featuredCarousel" data-slide="next">
		<span class="glyphicon glyphicon-cheveron-right"></span>
	</a>

</div><!--close #featuredCarousel-->

<div class="page-header"><!--open .page-header-->
	<h1><?php echo $pageTitle ?>!</h1>
</div><!--close .page-header-->	

<div class="jumbotron"><!--open .jumbotron-->
	<?php //include './resources/templates/featuredCarousel.inc.php'; ?>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fuga quaerat, eius impedit magnam, tenetur nostrum et, quis eligendi iste, ratione possimus ad doloremque atque accusantium sit nisi distinctio dolore.</p>

</div><!--close .jumbotron-->

<div class="row"><!--open .row-->
	
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<h4>Column 1</h4>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum soluta exercitationem dolore, ducimus nihil praesentium maiores quaerat, architecto modi asperiores rerum veniam. Rem adipisci cum nobis sed laudantium fugiat autem.
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<h4>Column 2</h4>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum soluta exercitationem dolore, ducimus nihil praesentium maiores quaerat, architecto modi asperiores rerum veniam. Rem adipisci cum nobis sed laudantium fugiat autem.
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<h4>Column 3</h4>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum soluta exercitationem dolore, ducimus nihil praesentium maiores quaerat, architecto modi asperiores rerum veniam. Rem adipisci cum nobis sed laudantium fugiat autem.
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<h4>Column 1</h4>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum soluta exercitationem dolore, ducimus nihil praesentium maiores quaerat, architecto modi asperiores rerum veniam. Rem adipisci cum nobis sed laudantium fugiat autem.
	</div>

</div><!--close .row-->

<!--Include FOOTER-->
<?php
	require_once './resources/templates/footer.inc.php';
?>