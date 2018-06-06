<?php
/**
 * @author T. aan 't Goor
 */

namespace FileValidation;
class Filesize {
    private $filesize;
    private $maxFilesize = 8388608;
    
    function __construct($filesize) {
        $this->filesize = $filesize;
    }
    
    public function isValid() {
        return $this->filesize <= $this->maxFilesize;
    }
}