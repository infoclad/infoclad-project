<?php

session_start();

$objTemplate->setPage('trabalhe.tpl.html');

// Ação do Form;
$Action = isset($_POST['action']) ? true : false;

$Nome = isset($_POST['nome']) ?  strip_tags($_POST['nome']) : '';
$Email = isset($_POST['email']) ?  strip_tags($_POST['email']) : '';

$Texto = isset($_POST['mensagem']) ? strip_tags($_POST['mensagem']) : '';
$Captcha = isset($_POST['captcha']) ? htmlspecialchars($_POST['captcha']) : '';

$formData = array('Nome' => $Nome, 'Email' => $Email, 'Mensagem' => $Texto, 'Action' => $Action, 'Alerta' => '');

if(isset($_POST['action']) == true) {

    $IPaddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'Indisponivel';
    $Mensagem  = "<strong>Nome:</strong> {$Nome} <br /> <strong>Email:</strong> {$Email}<br /><strong>IP:</strong> {$IPaddress}<br /><br />";
    $Mensagem .= "<strong>Mensagem Enviada:</strong><hr /><br /><pre>{$Texto}</pre>";

    $objUpload->typeAccepted = array("application/msword", "application/rtf", 'application/pdf', 'text/html', 'text/plain', 'application/vnd.ms-powerpoint', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    $objUpload->addFile($_FILES['arquivo']);

    if($Captcha != $_SESSION['captcha']) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Atenção !</strong> O código da imagem difere do informado!</font>";
    }
    else if($objUpload->uploadFiles() == false) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Atenção !</strong> O arquivo não é valido ou não pode ser enviado ao servidor</font>";
    }
    else if(empty($Nome) == true) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Atenção !</strong> Campo Nome não informado!</font>";
    }
    else if(verificaEmail($Email) == false) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Atenção !</strong> O email informado não parece ser válido!</font>";
    }
    else if(empty($Texto) == true) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Atenção !</strong> Campo Mensagem vazio!</font>";
    } else {

        $objEmail->addFrom($Nome, $Email);
        $objEmail->addReplyTo($Nome, $Email);
        $objEmail->addEmail('RH InfoClad', 'rh@infoclad.com.br');

        foreach($objUpload->movedFiles as $anexo) {
            $objEmail->addFile($anexo);
        }

        $objEmail->setSubject('InfoClad - Trabalhe Conosco');
        $objEmail->setContent($Mensagem);

        if($objEmail->send() == false) {
            $formData['Alerta'] = "<font color=\"red\">Não foi possível enviar Mensagem !</font>";
            $formData['Action'] = false;
        } else {
            $formData['Alerta'] = "<font color=\"green\">Mensagem enviada com sucesso !</font>";
            $objUpload->deleteUploadedFiles();
        }
    }
}

// Variaveis do Template;
$objTemplate->assign('form', $formData);


// Exibição do Template;
$objTemplate->show('nav.tpl.html');

?>