<?php

/*
 * Classe domainTools v0.1
 * Desenvolvido por Eder Machado (edeermachado@hotmail.com)
 * Data: 19/12/2010 14:32
 *
 */

class domainTools {
    public $domainName = '';
    private $registerAvaiable = false;
    private $whoIsData;

    var $serverNacional = 'whois.registro.br'; // Domínios Nacionais (.com.br, .br);
    var $serverInternacional = 'whois.internic.net'; // Domínios Internacionais (.com, .net, .org, .edu);
    var $serverOutros = 'whois.networksolutions.com'; // Outros Domínios (.aero, .arpa, .biz, .coop, .info, .int, .museum);


    public function __construct() {
        return true;
    }

    public function get($dominio='') {

        $this->setDominio($dominio);

        // Verifica dominios do brasil
        if ($this->isDominioNacional() == true) {
            return $this->dominioNacional();
        }

        // Verifica domínios internacionais
        if ($this->isDominioInternacional() == true) {
            return $this->dominioInternacional();
        }

        // Verifica os outros tipos de dominios
        if($this->isDominioNacional() == false || $this->isDominioInternacional() == false) {
            return $this->dominioOutros();
        }

        return false;
    }

    public function getDomain() {
        return $this->domainName;
    }

    public function setDominio($dominio='') {
        $this->domainName = trim(str_replace('www.', '', strtolower($dominio)));

        if(empty($this->domainName) == true) {
            return false;
        }

        return true;
    }

    public function whoIs() {
        return $this->whoIsData;
    }

    public function Avaiable() {
        return (bool) $this->registerAvaiable;
    }

    public function getIPAddress() {
        return gethostbyname($this->domainName);
    }

    public function isDominioNacional() {
        if (substr($this->domainName, -3) == ".br") {
            return true;
        }
        return false;
    }

    public function isDominioInternacional() {
        $final = substr($this->domainName, -4);

        if($final == '.com' || $final == '.net' || $final == '.org' || $final == '.edu') {
            return true;
        }

        return false;
    }

    private function dominioNacional() {
        // Conexão com Servidor Nacional de Domínios; Porta 43;
        @$brnic = fsockopen($this->serverNacional, 43, $errno, $errstr, 30);
        $buffer = '';

        if ($brnic == false) {
            $this->whoIsData = "$errstr ($errno)";
        } else {
            fputs($brnic, "{$this->domainName}\r\n");
            while (feof($brnic) == false) {
                $buffer .= fread($brnic, 128);
            }

            $matches = strpos($buffer, "No match for");

            // Avaiable to Register;
            if ($matches > 0) {
                $this->registerAvaiable = true;
            } else {
                $this->registerAvaiable = false;
            }

            // WhoIs Information;
            $this->whoIsData = str_replace("\n", "<br />\n", trim($buffer));

            fclose ($brnic);
        }
    }

    private function dominioInternacional() {
        // Conexão com Servidor Internacional de Dominios; Porta 43;
        @$internic = fsockopen($this->serverInternacional, 43, $errno, $errstr, 30);
        $buffer = '';

        if ($internic == false) {
            $this->whoIsData = "$errstr ($errno)";
        } else {
            fputs($internic, "{$this->domainName}\r\n");
            while (feof($internic) == false) {
                $buffer .= fread($internic, 128);
            }

            $matches = strpos($buffer, "No match for");

            // Avaiable to Register;
            if ($matches > 0) {
                $this->registerAvaiable = true;
            } else {
                $this->registerAvaiable = false;
            }

            // WhoIs Information;
            if ($matches > 0) {
                $this->whoIsData = "<pre>" . trim($buffer) . "</pre>";
            } else {
                $servidor = substr($buffer, strpos($buffer, "Whois Server:")+14, strlen($buffer));
                $servidor = substr($servidor, 0, strpos($servidor, "\n"));
                $entidade = fsockopen($servidor, 43, $errno, $errstr, 30);

                if ($entidade == false) {
                    $this->whoIsData = "$errstr ($errno)";
                } else {
                    $buffer .= "-------------------------------------------------------------------------------<BR> <BR>";
                    fputs($entidade, "{$this->domainName}\r\n");
                    while (feof($entidade) == false) {
                        $buffer .= fread($entidade, 128);
                    }

                    $this->whoIsData = str_replace("\n", "<BR>\n", trim($buffer));

                    fclose ($entidade);
                }
            }

            fclose ($internic);
        }
    }

    private function dominioOutros() {
        // Conexão com o Servidor  de Outros Domínios; Porta 43;
        @$network = fsockopen($this->serverOutros, 43, $errno, $errstr, 30);
        $buffer = '';

        if ($network == false) {
            $dados .= "$errstr ($errno)";
        } else {
            fputs($network, "{$this->domainName}\r\n");
            while (feof($network) == false) {
                $buffer .= fread($network, 128);
            }

            $matches = strpos($buffer, "NOT FOUND");

            // Avaiable to Register;
            if ($matches > 0) {
                $this->registerAvaiable = true;
            } else {
                $this->registerAvaiable = false;
            }

            // WhoIs Information;
            $this->whoIsData = str_replace("\n", "<br />\n", trim($buffer));

            fclose ($network);
        }
    }

    public function clear() {
        // Clear all;
        $this->domainName = null;
        $this->registerAvaiable = false;
        $this->whoIsData = null;
    }

    public function   __destruct() {
        $this->clear();
    }

}


?>
