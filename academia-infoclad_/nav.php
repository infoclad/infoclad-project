<span class="b p5"><!--  --></span>
<?php include("includes/breadcrumb.php"); ?>
<span class="b p5"><!--  --></span>
<?php include("includes/pageHeader.php"); ?>
<span class="b p5"><!--  --></span>

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'relatorio';

if (file_exists("includes/{$page}.php") == true) {
    include("includes/{$page}.php");
} else {
    include('includes/relatorio.php');
}
?>