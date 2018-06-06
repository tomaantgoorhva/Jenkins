<?php
/**
 * FileValidation PHPUnit test
 */
namespace FileValidation\Tests;
require __DIR__ . "/../../src/FileValidation/Filesize.php";;

use FileValidation\Filesize;
use PHPUnit_Framework_TestCase;

/**
 * FilesizeTest
 */
class FilesizeTest extends PHPUnit_Framework_TestCase
{

    /**
     * filesize class instance
     *
     * @var Filesize
     */
    private $filesize;

    /**
     * setUp
     *
     * @test
     * @return void
     */
    public function setUp()
    {
        $this->filesize = new Filesize(8388608); // 8MB
//        $this->filesize = new Filesize(9437184); // 9MB
    }

    /**
     * isValidFilesize test
     *
     * @test
     * @return void
     */
    public function isValidFilesize()
    {
        $expected = true;
        $actual = $this->filesize->isValid();
        $this->assertEquals($expected, $actual);
    }
}
