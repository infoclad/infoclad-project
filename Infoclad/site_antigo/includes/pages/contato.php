<?php

session_start();

$objTemplate->setPage('contato.tpl.html');

// Ação do Form;
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
        $formData['Alerta'] = "<font color=\"red\"><strong>Atenção !</strong> O código da imagem difere do informado!</font>";
    }
    else if(empty($Nome) == true) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Atenção !</strong> Campo Nome não informado!</font>";
    }
    else if(verificaEmail($Email) == false) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Atenção !</strong> O email informado não parece ser válido!</font>";
    }
    else if(empty($Titulo) == true) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Atenção !</strong> Campo Assunto não informado!</font>";
    }
    else if(empty($Texto) == true) {
        $formData['Action'] = false;
        $formData['Alerta'] = "<font color=\"red\"><strong>Atenção !</strong> Campo Mensagem vazio!</font>";
    } else {
        $objEmail->addFrom($Nome, $Email);
        $objEmail->addReplyTo($Nome, $Email);
        $objEmail->addEmail('Contato InfoClad', 'contato@infoclad.com.br');

        $objEmail->setSubject('InfoClad - Formulário de Contato: '.$Titulo);
        $objEmail->setContent($Mensagem);

        if($objEmail->send() == false) {
            $formData['Alerta'] = "<font color=\"red\">Não foi possível enviar Mensagem !<br >". $objEmail->error()."</font>";
            $formData['Action'] = false;
        } else {
            $formData['Alerta'] = "<font color=\"green\">Mensagem enviada com sucesso !</font>";
        }
    }
}

// Variaveis do Template;
$objTemplate->assign('form', $formData);


// Exibição do Template;
$objTemplate->show('nav.tpl.html');

?>