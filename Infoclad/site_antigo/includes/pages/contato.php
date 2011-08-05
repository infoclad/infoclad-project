<?php

session_start();

$objTemplate->setPage('contato.tpl.html');

// A��o do Form;
$Action = isset($_POST['action']) ? true : false;

$Nome = isset($_POST['nome']) ?  strip_tags($_POST['nome']) : '';
$Email = isset($_POST['email']) ?  strip_tags($_POST['email']) : '';

$Titulo = isset($_POST['assunto']) ? strip_tags($_POST['assunto']) : '';
$Texto = isset($_POST['mensagem']) ? strip_tags($_POST['mensagem']) : '';
$Captcha = isset($_POST['captcha']) ? htmlspecialchars($_POST['captcha']) : '';

$formData = array('Nome' => $Nome, 'Email' => $Email, 'Assunto' => $Titulo, 'Mensagem' => $Texto, 'Action' => $Action, 'Alerta' => '');

if(isset($_POST['action']) == true) {

    $IPaddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'Indisponivel';
    $Mensagem  = "<strong>Nome:</strong> {$Nome} <br /> <strong>Email:</strong> {$Email}<br /><strong>IP:</strong> {$IPaddress}<br /><br />";
    $Mensagem .= "<strong>Assunto:</strong><br /> {$Titulo}<br /><br /><strong>Mensagem Enviada:</strong><hr /><br /><br /><pre>{$Texto}</pre>";

    if($Captcha != $_SESSION['captcha']) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Aten��o !</strong> O c�digo da imagem difere do informado!</font>";
    }
    else if(empty($Nome) == true) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Aten��o !</strong> Campo Nome n�o informado!</font>";
    }
    else if(verificaEmail($Email) == false) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Aten��o !</strong> O email informado n�o parece ser v�lido!</font>";
    }
    else if(empty($Titulo) == true) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Aten��o !</strong> Campo Assunto n�o informado!</font>";
    }
    else if(empty($Texto) == true) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Aten��o !</strong> Campo Mensagem vazio!</font>";
    } else {
        $objEmail->addFrom($Nome, $Email);
        $objEmail->addReplyTo($Nome, $Email);
        $objEmail->addEmail('Contato InfoClad', 'contato@infoclad.com.br');

        $objEmail->setSubject('InfoClad - Formul�rio de Contato: '.$Titulo);
        $objEmail->setContent($Mensagem);

        if($objEmail->send() == false) {
            $formData['Alerta'] = "<font color=\"red\">N�o foi poss�vel enviar Mensagem !<br >". $objEmail->error()."</font>";
            $formData['Action'] = false;
        } else {
            $formData['Alerta'] = "<font color=\"green\">Mensagem enviada com sucesso !</font>";
        }
    }
}

// Variaveis do Template;
$objTemplate->assign('form', $formData);


// Exibi��o do Template;
$objTemplate->show('nav.tpl.html');

?>