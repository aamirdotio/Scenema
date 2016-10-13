<?php
	$pageTitle = 'Log In';
	require_once '../resources/templates/header.inc.php';

	if (!empty($_POST)) {
		
		// Create connection
		//$mysqli = new mysqli('localhost', 'root', '','scenema');
		$mysqli = new mysqli('studmysql01.fhict.local', 'dbi356141', '05940613','dbi356141');

		if ($mysqli->connect_error) {
		    die("Connection failed: " . $mysqli->connect_error);
		} 

		if(isset($_SESSION["User_ID"])){
			header('Location: addMovie.php'); exit();
		} else {

		$EM = $_POST['email'];
		$PW = $_POST['password'];

		$result = $mysqli->query("select * from user where email='$EM' AND password='$PW'");

		$row = $result->fetch_array(MYSQLI_BOTH);
		
		session_start();

		$_SESSION["User_ID"] = $row['user_id'];

		header('Location: addMovie.php');
	}

	}

?>

	
	<div class="container upContainer">
    <div class="row">
	<form name="loginForm" class="col-lg-4 col-lg-offset-4 loginWrap" method="post" >
    	<h1 class="text-center"><?php echo $pageTitle ?>!</h1>

        <div class="input-group input-group-lg">
		  <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
		  <input type="text" name="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon1">
		</div>
		<br>
		<div class="input-group input-group-lg">
		  <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-lock"></span></span>
		  <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
		</div>
		<br>
		<input type="submit" class="btn btn-primary btn-lg" value="Log In">
	</form>
    </div>
	</div>

<!--Include FOOTER-->
<?php
	require_once '../resources/templates/footer.inc.php';
?>