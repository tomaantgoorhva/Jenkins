<?php
/**
 * @author T. aan 't Goor
 */

namespace Encryption;
class Encrypt {
    public static function encrypt($value) {
        $hash1 = hash('sha256', "!)@(dkfgbsaewr82398sdjbfsdf'".$value."#$54sdf563254324esd&%^");
        $hash2 = sha1("[{h34g2534u56489er<:/" . $hash1 . "?;>rguh3r8sdaf8sa83j}]");
        $hash3 = substr($hash2, 0, 30);
        
        return $hash3;
    }
}