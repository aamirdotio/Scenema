<?php
	$pageTitle = 'Dashboard';
	require_once '../resources/templates/header.inc.php';
	if (!isset($_SESSION['User_ID'])) {
 		header("Location: login.php");
	}

?>

<!--Include FOOTER-->
<?php
	require_once '../resources/templates/footer.inc.php';
?>