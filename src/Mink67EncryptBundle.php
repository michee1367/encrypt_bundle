<?php

namespace Mink67\Encrypt;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Perment de créer un un kafka connect
 */
class Mink67EncryptBundle extends Bundle
{
    /**
     * 
     */
    public function __construct() 
    {
        
    }

    /**
     * 
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

    }
}