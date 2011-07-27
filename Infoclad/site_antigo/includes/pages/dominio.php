<?php

include('includes/classes/domainTools.class.php');

$dominio = isset($_POST['dominio']) ? $_POST['dominio'] : 'www.infoclad.com.br';

$objDomain = new domainTools();
$objDomain->get($dominio);


$domainInfo = array(
        'Name' => $objDomain->getDomain(),
        'IPAddress' => $objDomain->getIPAddress(),
        'Status' => $objDomain->avaiable(),
        'whoIs' => $objDomain->whois());

$objTemplate->setPage('dominio.tpl.html');
$objTemplate->assign('Domain', $domainInfo);
$objTemplate->show('nav.tpl.html');

?>