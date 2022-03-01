<?php

namespace Mink67\Encrypt\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use function Symfony\Component\String\u;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * 
 */
class Mink67EncryptExtension extends Extension {


    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container){

        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__. "/../Resources/config")
        );

        $loader->load('services.yaml');

        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        //dd($config);

        $container->setParameter("mink67.encrypt.ciphering", $config["ciphering"]);
        $container->setParameter("mink67.encrypt.options", $config["options"]);
        $container->setParameter("mink67.encrypt.encryption_iv", $config["encryption_iv"]);
        $container->setParameter("mink67.encrypt.encryption_key", $config["encryption_key"]);
        $container->setParameter("mink67.encrypt.decryption_iv", $config["decryption_iv"]);
        $container->setParameter("mink67.encrypt.decryption_key", $config["decryption_key"]);

        //dd((string) u("For-oo_iir")->camel());
        

        //dd($this->data_convert);
        

    }

}
