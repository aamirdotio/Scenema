<?php
	$pageTitle = 'Add Movie';
	require_once '../resources/templates/header.inc.php';

?>
<div class="container upContainer"><!--open container-->
<div class="row">
	<form class="formA col-lg-12 col-lg-offset-3" method="post" action="">
		<span class="col-lg-5"><h1 class="text-center">Add Movie</h1></span>

		<div class="clearfix"></div>
		<br>
		<div class="input-group input-group-lg col-lg-5">
		  <span class="input-group-addon" id="sizing-addon1">Movie Title</span>
		  <input type="text" class="form-control" name="title" aria-describedby="sizing-addon1">
		</div><br>
		<div class="input-group input-group-lg col-lg-5">
		  <span class="input-group-addon" id="sizing-addon1">Director</span>
		  <input type="text" class="form-control" name="director" aria-describedby="sizing-addon1">
		</div><br>
		<div class="input-group input-group-lg col-lg-5">
		  <span class="input-group-addon" id="sizing-addon1">Year</span>
		  <input type="text" class="form-control" name="year" aria-describedby="sizing-addon1">
		  <span class="input-group-addon" id="sizing-addon1">Duration</span>
		  <input type="text" class="form-control" name="duration" aria-describedby="sizing-addon1">
		</div><br>
		<div class="input-group input-group-lg col-lg-3">
			 <label for="genre_id">Genre A:</label>
		      <select class="form-control" id="genre_id" name="genre_id">
		        <option value="1">Action</option>
		        <option value="2">Comedy</option>
		        <option value="3">Crime</option>
		        <option value="4">Drama</option>
		        <option value="5">Documentary</option>
		      </select>
		</div><br>
		<div class="input-group input-group-lg col-lg-3">
			 <label for="genre_id2">Genre B:</label>
		      <select class="form-control" id="genre_id2" name="genre_id2">
		        <option value="1">Action</option>
		        <option value="2">Comedy</option>
		        <option value="3">Crime</option>
		        <option value="4">Drama</option>
		        <option value="5">Documentary</option>
		      </select>
		</div><br>
		<div class="input-group input-group-lg col-lg-3">
			 <label for="contentRating">Content Rating:</label>
		      <select class="form-control" id="contentRating" name="contentRating_id">
		        <option value="1">G</option>
		        <option value="2">PG</option>
		        <option value="3">PG-13</option>
		        <option value="4">R</option>
		        <option value="5">NC-17</option>
		      </select>
		</div><br>
		<div class="form-group col-lg-5" style="padding:0;">
      		<label for="synopsis">Synopsis:</label>
      		<textarea class="form-control" rows="5" id="synopsis" name="synopsis"></textarea>
    	</div><br>
    	<div class="clearfix"></div>
		<div class="input-group input-group-lg col-lg-3">
		  <span class="input-group-addon" id="sizing-addon1">Poster</span>
		  <input type="text" class="form-control" name="posterPath" aria-describedby="sizing-addon1">
		</div><br>
		<div class="clearfix"></div>
		<input class="btn btn-lg btn-success col-lg-5" type="submit" value="Add Movie">

	</form>
</div><!--close .row-->
</div><!--close .container-->
<!--Include FOOTER-->
<?php
	require_once '../resources/templates/footer.inc.php';
?>