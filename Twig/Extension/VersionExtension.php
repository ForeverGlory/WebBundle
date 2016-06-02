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

use PackageVersions\Versions;

/**
 * Description of Group
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
class VersionExtension extends \Twig_Extension
{

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('version', array($this, 'getVersion')),
        );
    }

    public function getVersion($package, $full = false)
    {
        $version = Versions::getVersion($package);
        return $full ? $version : strstr($version, '@', true);
    }

    public function getName()
    {
        return 'glory_web.version';
    }

}
