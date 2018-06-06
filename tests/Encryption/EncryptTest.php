<?php
/**
 * Encryption PHPUnit test
 */
namespace Encryption\Tests;
require __DIR__ . "/../../src/Encryption/Encrypt.php";;

use Encryption\Encrypt;
use PHPUnit_Framework_TestCase;

/**
 * EncryptTest
 */
class EncryptTest extends PHPUnit_Framework_TestCase
{

    /**
     * isValidEncryption test
     *
     * @test
     * @return void
     */
    public function isValidEncryption()
    {
        # 1th check
        $expected1 = "7e240bd6d28f137e1390c5c3ef7be7";
        $actual1 = Encrypt::encrypt("TestEncryptieWaarde123!@#");
        $this->assertEquals($expected1, $actual1);
        
        
        # 2th check
        $expected2 = "7e240bd6d28f137e1390c5c3ef7be7";
        $actual2 = Encrypt::encrypt("159OtherStringToEncrypt");
        $this->assertNotEquals($expected2, $actual2);
    }
}
