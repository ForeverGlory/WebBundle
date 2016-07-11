<?php

/*
 * This file is part of the current project.
 * 
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glory\Bundle\WebBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of BowerExtension
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
class BowerExtension extends \Twig_Extension
{

    /**
     * @var ContainerInterface 
     */
    protected $container;
    protected $path;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('bower_path', [$this, 'getPath'])
        ];
    }

    public function getPath()
    {
        if (!$this->path) {
            $this->path = 'bower_components';
        }
        return $this->path;
    }

    public function getName()
    {
        return 'glory_web.bower';
    }

}
