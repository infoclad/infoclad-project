<?php

session_start();
include('private/cool_php_captcha/captcha.class.php');

$captcha = new SimpleCaptcha();

// OPTIONAL Change configuration...
$captcha->wordsFile = 'words/en.php';
$captcha->session_var = 'captcha';
$captcha->imageFormat = 'png';
$captcha->scale = 3;
$captcha->blur = true;
$captcha->resourcesPath = "private/cool_php_captcha/resources";


// OPTIONAL Simple autodetect language example
/*
if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $langs = array('en', 'es');
    $lang  = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (in_array($lang, $langs)) {
        $captcha->wordsFile = "words/$lang.php";
    }
}
*/

// Image generation
$captcha->CreateImage();

?>