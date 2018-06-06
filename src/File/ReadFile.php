<?php
/**
 * @author T. aan 't Goor
 */

namespace File;
class ReadFile {
    private $name;
    private $tmpName;
    private $excelData = array();
    
    function __construct($tmpName, $fileName) {
        $this->tmpName = $tmpName;
        $this->name = $fileName;
        
        $this->readExcel();
    }
    
    private function readExcel() {
        require_once dirname(__FILE__) . '/../../Vendor/PHPExcel/PHPExcel.php';
        
        $objPHPExcel = \PHPExcel_IOFactory::load($this->tmpName);
        $objPHPExcel->setActiveSheetIndex(0);
        $this->excelData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
    }

    public function getName() {
        return $this->name;
    }
    
    public function getExcelData() {
        return $this->excelData;
    }
}