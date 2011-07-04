<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include("includes/head.php"); ?>
	</head>
	<body onload="letra();">
		<?php include("includes/header.php"); ?>
		<div id="navigation-holder" class="b wrapper-holder">
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (file_exists("includes/{$page}.php") == true) {
    include("includes/{$page}.php");
} else {
    include('includes/home.php');
}
?>

		</div>
		<?php include("includes/footer.php");?>
	</body>
</html>
