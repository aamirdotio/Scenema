<?php require '../resources/scripts/connectDB.php'; ?>
<?php
	session_start();
	unset($_SESSION["User_ID"]);
	session_destroy();

	$pageTitle = 'Log Out';


	require_once '../resources/templates/header.inc.php';
?>

<h1>You've logged out!</h1>

<!--Include FOOTER-->
<?php
	require_once '../resources/templates/footer.inc.php';
?>