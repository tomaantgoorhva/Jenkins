<?php
/**
 * @author T. aan 't Goor
 */

namespace FileValidation;
class Filecontent {
    private $fileLocation;
    function __construct($fileLocation) {
        $this->fileLocation = $fileLocation;
    }
    
    public function isValid() {
        // Moet nog geimplementeerd worden
        return true;
    }
}