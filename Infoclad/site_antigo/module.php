<?php

ob_start();

include('includes/classes/error.class.php');

include('includes/erro.php');
include('includes/functions.php');

$module = isset($_GET['module']) ? $_GET['module'] : 'default';
$moduleFile = "includes/modules/{$module}.php";


if(file_exists($moduleFile) == true) {
    include($moduleFile);
} else {
    die('Módulo não encontrado !');
}

?>