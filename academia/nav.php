
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (file_exists("includes/{$page}.php") == true) {
    include("includes/{$page}.php");
} else {
    include('includes/home.php');
}
?>
