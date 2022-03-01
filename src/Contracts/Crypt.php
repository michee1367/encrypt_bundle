<?php

namespace Mink67\Encrypt\Contracts;

/**
 * 
 */
interface Crypt {
    /**
     * @param string $textClear 
     * @return string  
     */
    public function encrypt(string $textClear) : string;
    /**
     * @param string $textClear 
     * @return string  
     */
    public function decrypt(string $encryptText) : string;

}