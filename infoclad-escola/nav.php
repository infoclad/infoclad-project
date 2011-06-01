<span class="b p5"><!--  --></span>
<?php include("includes/breadcrumb.php"); ?>
<span class="b p5"><!--  --></span>
<?php include("includes/pageHeader.php"); ?>
<span class="b p5"><!--  --></span>

<div id="navHolder">
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'mural';

if (file_exists("includes/{$page}.php") == true) {
    include("includes/{$page}.php");
} else {
    include('includes/mural.php');
}
?>
</div>