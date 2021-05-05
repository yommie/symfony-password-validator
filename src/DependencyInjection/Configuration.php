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

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Bundle Configuration Class
 *
 * @author Alfa Emmanuel <yommie76@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generate the configuration tree builder
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        return new TreeBuilder("password_validator");
    }
}
