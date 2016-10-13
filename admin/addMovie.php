<?php
	$pageTitle = 'Add Movie';
	require_once '../resources/templates/header.inc.php';
	
	session_start();
	if (!isset($_SESSION['User_ID'])) {
 		header("Location: login.php");
	}
	
	if (! empty($_POST)) {
			
		
		//Connect to DB
		$host = 'studmysql01.fhict.local';
		$database = 'dbi356141';
		$dsn = 'mysql:host=$host;dbname=$database; charset=utf8';
		$username = 'dbi356141';
		$password = '05940613';

		$message = '';

		// Create connection
		$mysqli = new mysqli($host, $username, $password,$database);

		// Check connection
		if ($mysqli->connect_error) {
		    die("Connection failed: " . $mysqli->connect_error);
		} 

		//$host = 'localhost';
		//$database = 'scenema';
		//$dsn = 'mysql:host=$host;dbname=$database; charset=utf8';
		//$username = 'root';
		//$password = '';

		//$message = '';

		// Create connection
		//$mysqli = new mysqli($host, $username, $password,$database);



		// Check connection
		//if ($mysqli->connect_error) {
		//    die("Connection failed: " . $mysqli->connect_error);
		//} 

		//Insert our data

		$title = $_POST['title'];
		$year = $_POST['year'];
		$duration = $_POST['duration'];
		$director = $_POST['director'];
		$contentRating_id = $_POST['contentRating_id'];
		$synopsis = $_POST['synopsis'];
		$genre_id = $_POST['genre_id'];
		$genre_id2 = $_POST['genre_id2'];
		$posterPath = $_POST['posterPath'];

		$sql = "INSERT INTO `movie` (`title`, `year`, `duration`, `director`, `contentRating_id`, `synopsis`, `genre_id`, `genre_id2`, `posterPath`) VALUES ('{$title}', '{$year}', '{$duration}', '{$director}', '{$contentRating_id}', '{$synopsis}', '{$genre_id}', '{$genre_id2}', '{$posterPath}');";

		$insert = $mysqli->query($sql);

		//Print response from MySQL 
		if ($insert) {
			echo "Success! Row ID: {$mysqli->insert_id}";
		} else {
			die("Error: {$mysqli->errno} : {$mysqli->error}");
		}

		//Close our connection
		$mysqli->close();

	} //end if !empty POST
?>
<div class="container upContainer"><!--open container-->
<div class="row">
	<form name="addMovie" class="formA col-lg-12 col-lg-offset-3" method="post" action="./addMovie.php">
		<span class="col-lg-5"><h1 class="text-center">Add Movie</h1></span>

		<div class="clearfix"></div>
		<br>
		<div class="input-group input-group-lg col-lg-5">
		  <span class="input-group-addon" id="sizing-addon1">Movie Title</span>
		  <input type="text" class="form-control" name="title" aria-describedby="sizing-addon1">
		</div><br>
		<div class="input-group input-group-lg col-lg-5">
		  <span class="input-group-addon" id="sizing-addon2">Director</span>
		  <input type="text" class="form-control" name="director" aria-describedby="sizing-addon1">
		</div><br>
		<div class="input-group input-group-lg col-lg-5">
		  <span class="input-group-addon" id="sizing-addon3">Year</span>
		  <input type="text" class="form-control" name="year" aria-describedby="sizing-addon1">
		  <span class="input-group-addon" id="sizing-addon4">Duration</span>
		  <input type="text" class="form-control" name="duration" aria-describedby="sizing-addon5">
		</div><br>
		<div class="input-group input-group-lg col-lg-3">
			 <label for="genre_id">Genre A:</label>
		      <select class="form-control" id="genre_id" name="genre_id">
		        <option value="1">Action</option>
		        <option value="2">Comedy</option>
		        <option value="3">Crime</option>
		        <option value="4">Drama</option>
		        <option value="5">Documentary</option>
		        <option value="6">Fantasy</option>
		        <option value="7">Fiction</option>
		        <option value="8">Horror</option>
		        <option value="9">Mystery</option>
		        <option value="10">Romance</option>
		        <option value="11">Sci-fi</option>
		        <option value="12">Thriller</option>
		      </select>
		</div><br>
		<div class="input-group input-group-lg col-lg-3">
			 <label for="genre_id2">Genre B:</label>
		      <select class="form-control" id="genre_id2" name="genre_id2">
		        <option value=""></option>
		        <option value="1">Action</option>
		        <option value="2">Comedy</option>
		        <option value="3">Crime</option>
		        <option value="4">Drama</option>
		        <option value="5">Documentary</option>
		        <option value="6">Fantasy</option>
		        <option value="7">Fiction</option>
		        <option value="8">Horror</option>
		        <option value="9">Mystery</option>
		        <option value="10">Romance</option>
		        <option value="11">Sci-fi</option>
		        <option value="12">Thriller</option>
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
		  <span class="input-group-addon" id="sizing-addon6">Poster</span>
		  <input type="text" class="form-control" name="posterPath" aria-describedby="sizing-addon7">
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