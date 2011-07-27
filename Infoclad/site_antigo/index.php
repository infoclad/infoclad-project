<?php

ob_start();

include('includes/classes/error.class.php');
include('includes/classes/template.class.php');
include('includes/classes/email.class.php');

include('includes/config.php');
include('includes/erro.php');
include('includes/template.php');
include('includes/email.php');
include('includes/upload.php');

require('includes/functions.php');

$Section = isset($_GET['section']) ? $_GET['section'] : '';
$Page = isset ($_GET['page']) ? $_GET['page'] : 'index';
$pageFile = "includes/pages/{$Page}.php";
$page404 = "includes/pages/e404.php";
$pageSection = "includes/pages/{$Section}/{$Page}.php";


if(file_exists($pageSection) == true) {
    include($pageSection);
}
else if(file_exists($pageFile) == true) {
    include($pageFile);
} else {
    include($page404);
}

?>