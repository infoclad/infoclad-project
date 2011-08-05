<?php

class Upload {
    var $typeAccepted = array();
    var $uploadDir = 'content/uploads';
    var $maxSize = 1048576;
    var $minSize = 0;

    public $uploadFiles = array();
    public $movedFiles = array();

    public function addFile($file=null) {
        if(is_null($file) == false) {
            $this->uploadFiles[] = $file;
            return true;
        }

        return false;
    }

    function uploadFiles() {

        foreach($this->uploadFiles as $tempFile) {
            if(is_array($tempFile) == true) {

                if($tempFile['error'] == 0) {

                    if($tempFile['size'] > $this->minSize && $tempFile['size'] < $this->maxSize) {

                        if(in_array($tempFile['type'], $this->typeAccepted)) {

                            $uploadedFile = "{$this->uploadDir}/". $tempFile['name'];
                            
                            if(move_uploaded_file($tempFile['tmp_name'], $uploadedFile)) {
                                $this->movedFiles[] = $uploadedFile;
                                return true;
                            }
                        }
                    }
                }
            }
        }
        return false;
    }

    function deleteUploadedFiles() {
        foreach($this->movedFiles as $file) {
            if(file_exists($file) == true)
                unlink($file);
        }
    }

    function __destruct() {
        $this->deleteUploadedFiles();
    }
}

?>
