<?php

$objEmail = new Email();

$objEmail->Host = SMTP_HOST;
$objEmail->Port = SMTP_PORT;
$objEmail->Username = SMTP_USER;
$objEmail->Password = SMTP_PASS;

$objEmail->configure();

?>