<?php

function handlerError($errno, $errstr, $errfile, $errline) {
    @ob_end_clean(); /* Limpa o buffer; */
    global $objTemplate;

    $objError = new Error();
    $objError->Report($errno, $errstr, $errfile, $errline);

    /* Error */
    $objTemplate->assign('errorType', $objError->getErrorType());
    $objTemplate->assign('errorMessage', $objError->errorMessage);
    $objTemplate->assign('errorFile', basename($objError->errorFile));
    $objTemplate->assign('errorLine', $objError->errorLine);
    $objTemplate->show('error.tpl.html');
    exit();
}

function handlerException($exception) {
    @ob_end_clean(); /* Limpa o buffer; */
    global $objTemplate;

    $objError = new Error();
    $objError->Exception($exception);

    /* Exception */
    $objTemplate->assign('errorType', $objError->getErrorType());
    $objTemplate->assign('errorMessage', $objError->errorMessage);
    $objTemplate->assign('errorFile', basename($objError->errorFile));
    $objTemplate->assign('errorLine', $objError->errorLine);
    $objTemplate->show('error.tpl.html');
    exit();
}

/* Define o seu novo manipulador de erros */
set_error_handler('handlerError', E_ALL);  /* Funчуo de erros */
set_exception_handler('handlerException'); /* Funчуo de exceptions */
date_default_timezone_set('Brazil/East'); /* Define zona de tempo */

?>