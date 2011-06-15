<a href=""></a><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	<body onload="letra();">
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (file_exists("includes/{$page}.php") == true) {
    include("includes/{$page}.php");
} else {
    include('includes/home.php');
}
?>
	</body>
</html>
