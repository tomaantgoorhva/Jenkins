<?php
/**
 * @author T. aan 't Goor
 */

namespace File;
class NewFile {
    private $oldFile;
    private $encryptedColumns; // Wordt niet niet gebruikt
    private $newData = array();
    
    function __construct($oldFile, $encryptedColumns) {
        $this->oldFile = $oldFile;
        $this->encryptedColumns = $encryptedColumns;
        
        $this->encrypt();
    }
    
    private function encrypt() {
        $this->newData = $this->oldFile->getExcelData();
        
        foreach($this->newData as $key=>$value) {
            foreach($this->encryptedColumns as $encryptColumn) {
                $this->newData[$key][$encryptColumn] = \Encryption\Encrypt::encrypt($value[$encryptColumn]);
            }
        }
    }
    
    private function getName($oldName) {
        return "Hashed_".$oldName;
    }
    
    public function download() {
        require_once dirname(__FILE__) . '/../../Vendor/PHPExcel/PHPExcel.php';
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$this->getName($this->oldFile->getName()).'"');
        header('Cache-Control: max-age=0');
        
        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        
        foreach($this->newData as $rowNumber => $row) {
            foreach($row as $columnNumber => $value) {
                $objPHPExcel->getActiveSheet()->setCellValue($columnNumber.$rowNumber, $value);
            }
        }
        
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        
        return;
    }
}