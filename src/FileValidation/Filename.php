<?php
/**
 * @author T. aan 't Goor
 */

namespace FileValidation;
class Filename {
    private $filename;
    
    function __construct($filename) {
        $this->filename = $filename;
    }
    
    public function isValid() {
        $pathInfo = pathinfo($this->filename, PATHINFO_EXTENSION);
        if($pathInfo != 'xlsx') {
            return false;
        }
        
        if(!is_numeric(substr($this->filename, -9, 4))) {
            return false;
        }
        
        return true;
    }
}