<?php

namespace Mink67\Encrypt\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * 
 */
class Configuration implements ConfigurationInterface {


    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder(){
        $treepBuilder = new TreeBuilder("mink67_encrypt");

        
        $root = $treepBuilder->getRootNode();

        if($root instanceof ArrayNodeDefinition){
            $root
                ->children()
                        ->scalarNode("ciphering")
                        ->isRequired()
                        ->cannotBeEmpty()
                    ->end()
                        ->scalarNode("options")
                        ->isRequired()
                        ->cannotBeEmpty()
                    ->end()
                        ->scalarNode("encryption_iv")
                        ->isRequired()
                        ->cannotBeEmpty()
                    ->end()
                        ->scalarNode("encryption_key")
                        ->isRequired()
                        ->cannotBeEmpty()
                    ->end()
                        ->scalarNode("decryption_iv")
                        ->isRequired()
                        ->cannotBeEmpty()
                    ->end()
                        ->scalarNode("decryption_key")
                        ->isRequired()
                        ->cannotBeEmpty()
                    ->end()
                        /*->arrayNode("data_convert")
                        ->isRequired()
                        //->cannotBeEmpty()
                        ->children()
                            ->scalarNode("phone")
                            ->isRequired()
                        ->end()
                            ->scalarNode("name")
                            ->isRequired()
                        ->end()
                            ->scalarNode("first_name")
                            ->isRequired()
                        ->end()
                            ->scalarNode("last_name")
                            ->isRequired()
                        ->end()
                            ->scalarNode("sexe")
                            ->isRequired()
                        ->end()
                            ->scalarNode("email")
                            ->isRequired()
                        ->end()
                    ->end()*/
                ->end()
            ;

        }else{

            throw new InvalidConfigurationException("Root must be an instance to ArrayNodeDefinition");
        }

        return $treepBuilder;

        
    }

}