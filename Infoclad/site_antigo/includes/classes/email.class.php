<?php

require('private/phpmailer/class.phpmailer.php');

class Email {

    var $Host;
    var $Port = 25;
    var $Username;
    var $Password;

    var $Debug = FALSE;
    var $Auth = TRUE;
    var $Protocol = 'tsl';

    var $Subject;
    var $Mensage;
    var $AltBody = 'Para visualizar esta mensagem, desbloquei-o ou ative modo de compatibilidade HTML !';

    private $mailer;
    private static $instance;

    public function __construct() {
        $this->mailer = new PHPMailer();
    }

    static public function singleton() {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class;
        }

        return self::$instance;
    }

    public function configure() {
        $this->mailer->IsSMTP();
        $this->mailer->SMTPAuth = $this->Auth;
        $this->mailer->SMTPSecure = $this->Protocol;

        $this->mailer->Host = $this->Host;
        $this->mailer->Port = $this->Port;
        $this->mailer->Username = $this->Username;
        $this->mailer->Password = $this->Password;

        return true;
    }

    public function addFrom($name='', $email='') {
        $this->mailer->SetFrom($email, $name);
        return true;
    }

    public function addEmail( $name='', $email='') {
        $this->mailer->AddAddress($email, $name);
        return true;
    }

    public function addReplyTo($name='', $email='') {
        $this->mailer->AddReplyTo($email, $name);
        return true;
    }

    public function addFile($file='') {
        if(file_exists($file) == true) {
            $this->mailer->AddAttachment($file);
            return true;
        }
        return false;
    }

    public function setSubject($subject='') {
        $this->mailer->Subject = $subject;
        return true;
    }

    public function setContent($content='', $html=true) {
        $this->mailer->IsHTML($html);
        $this->mailer->Body = $content;
        return true;
    }

    public function setAlt($message='') {
        $this->mailer->AltBody = $message;
        return true;
    }

    public function send() {
        return $this->mailer->Send();
    }

    public function error() {
        return $this->mailer->ErrorInfo;
    }

    public function clear() {
        $this->mailer->ClearAllRecipients();
        return true;
    }
}

?>