<?php

/*
 * This file is part of the Password Validator bundle.
 *
 * (c) Alfa Emmanuel <yommie76@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yommie\PasswordValidatorBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Bundle Extension Class
 *
 * @author Alfa Emmanuel <yommie76@gmail.com>
 */
class PasswordValidatiorExtension extends Extension
{
    /**
     * Load Configurations
     *
     * @param  array            Configurations
     * @param  ContainerBuilder Container
     *
     * @return void
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configuration = new Configuration();

        $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . "/../Resources/config"));
        $loader->load("services.yaml");
    }
}
