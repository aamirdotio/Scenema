<?php
	$pageTitle = 'Home';
	$siteRoot = '/ProjectX';
	require_once './resources/templates/header.inc.php';
?>

<div class="page-header"><!--open .page-header-->
	<h1><?php echo $pageTitle ?>!</h1>
</div><!--close .page-header-->	

<div class="jumbotron"><!--open .jumbotron-->
	
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