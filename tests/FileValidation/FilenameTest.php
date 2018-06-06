<?php
/**
 * FileValidation PHPUnit test
 */
namespace FileValidation\Tests;
require __DIR__ . "/../../src/FileValidation/Filename.php";

use FileValidation\Filename;
use PHPUnit_Framework_TestCase;

/**
 * FilesizeName
 */
class FilenameTest extends PHPUnit_Framework_TestCase
{

    /**
     * filename class instance
     *
     * @var Filename
     */
    private $validFilename;
    private $invalidFilename;

    /**
     * setUp
     *
     * @test
     * @return void
     */
    public function setUp()
    {
        $this->validFilename = new Filename('Valid-1234.xlsx');
        $this->invalidFilename = new Filename('Invalid-ABCD.xlsx');
    }
    
    /**
     * isValidFilename test
     *
     * @test
     * @return void
     */
    public function isValidFilename()
    {
        $expected = true;
        $actual = $this->validFilename->isValid();
        $this->assertEquals($expected, $actual);
    }

    /**
     * isInvalidFilename test
     *
     * @test
     * @return void
     */
    public function isInvalidFilename()
    {
        $expected = false;
        $actual = $this->invalidFilename->isValid();
        $this->assertEquals($expected, $actual);
    }
}
