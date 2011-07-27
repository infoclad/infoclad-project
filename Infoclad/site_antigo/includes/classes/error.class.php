<?php

define('E_OTHER', 0);

class Error {

    var $saveLogs = true;
    var $debugMode = true;
    var $fileContent = 'content/template/error.tpl.html';
    var $logsDir = "private/error_logs";
    var $fileName = 'errorlog_%D%m%Y.txt';

    public $errorFile = __FILE__;
    public $errorLine = 0;
    public $errorTrace;
    public $errorMessage = '';
    public $errorCode = 0;
    public $errorType;

    private $errorTypeDescription = array(
            E_OTHER => 'CAUGHT EXCEPTION',
            E_ERROR => 'ERROR',
            E_WARNING => 'WARNING',
            E_PARSE => 'PARSING ERROR',
            E_NOTICE => 'NOTICE',
            E_CORE_ERROR => 'CORE ERROR',
            E_CORE_WARNING => 'CORE WARNING',
            E_COMPILE_ERROR => 'COMPILE ERROR',
            E_COMPILE_WARNING => 'COMPILE WARNING',
            E_USER_ERROR => 'USER ERROR',
            E_USER_WARNING => 'USER WARNING',
            E_USER_NOTICE => 'USER NOTICE',
            E_STRICT => 'STRICT NOTICE',
            E_RECOVERABLE_ERROR => 'RECOVERABLE ERROR'
    );

    public function __construct() {

    }

    public function Exception($obj) {
        return $this->Report($obj);
    }

    public function Report() {
        // Verifica se nуo foi chamada por uma 'exception'
        if(func_num_args() == 4) {
            list($this->errorType, $this->errorMessage, $this->errorFile, $this->errorLine) = func_get_args();
        } else {
            $excpt = func_get_arg(0); // Pegar todos os argumentos da funчуo

            if(is_object($excpt)) {
                $this->errorCode = $excpt->getCode();
                $this->errorMessage = $excpt->getMessage();
                $this->errorFile = $excpt->getFile();
                $this->errorLine = $excpt->getLine();
                $this->errorTrace = $excpt->getTrace();

                return true;
            }
            return false;
        }

        return true;
    }

    function Save() {
        // Salvando nos logs
        if($this->saveLogs == true) {
            error_log("PHP {$this->errorType}: {$this->errorMessage} in {$this->errorFine} on line {$this->errorLine}");
        }

        $ipaddr = $_SERVER['REMOTE_ADDR'];
        $data = date('d/m/Y');

        $error = "#{$this->errorType} - Data: {$data} | Client: {$ipaddr} | Erro: {$this->errorMessage} na linha {$this->errorLine} do arquivo {$this->errorFile}";

        $file = sprintf($this->fileName, date('D'), date('m'), date('Y'));
        $log = fopen("{$this->logsDir}/{$file}", 'aw');
        fwrite($log, $error."\n");
        fclose($log);
    }

    public function getErrorType() {
        if( isset($this->errorTypeDescription[$this->errorType]) == true ) {
            return $this->errorTypeDescription[$this->errorType];
        }
        return $this->errorTypeDescription[E_OTHER];
    }
}

?>