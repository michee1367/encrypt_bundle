<?php

namespace Mink67\Encrypt;

use Mink67\Encrypt\Contracts\Crypt as ContractsCrypt;

/**
 * 
 */
class Crypt implements ContractsCrypt {
    /**
     * @var string
     */
    private $decryption_key;
    /**
     * @var string
     */
    private $decryption_iv;
    /**
     * @var string
     */
    private $encryption_key;
    /**
     * @var string
     */
    private $encryption_iv;
    /**
     * @var string
     */
    private $ciphering;
    /**
     * @var int
     */
    private $options;

    public function __construct(
        string $ciphering,
        string $options,
        string $encryption_iv,
        string $encryption_key,
        string $decryption_iv,
        string $decryption_key,
    ) {
        $this->ciphering = $ciphering;
        $this->options = $options;
        $this->encryption_iv = $encryption_iv;
        $this->encryption_key = $encryption_key;
        $this->decryption_iv = $decryption_iv;
        $this->decryption_key = $decryption_key;
    }


    /**
     * @param string $textClear 
     * @return string  
     */
    public function encrypt(string $textClear) : string
    {
        $encryption = openssl_encrypt(
            $textClear, 
            $this->ciphering,
            $this->encryption_key, 
            $this->options, 
            $this->encryption_iv
        );

        return $encryption;
    }
    /**
     * @param string $textClear 
     * @return string  
     */
    public function decrypt(string $encryptText) : string
    {
        $encryption = openssl_decrypt(
            $encryptText, 
            $this->ciphering,
            $this->decryption_key, 
            $this->options, 
            $this->decryption_iv
        );

        return $encryption;
    }

}