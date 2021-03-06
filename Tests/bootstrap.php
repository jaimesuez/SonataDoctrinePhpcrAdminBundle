<?php

/*
 * this file is part of the symfony package.
 *
 * (c) fabien potencier <fabien.potencier@symfony-project.com>
 *
 * for the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$rootDir = __DIR__.'/../../../../../';

require_once $rootDir.'/vendor/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php';
require_once $rootDir.'/app/autoload.php';

if (!class_exists('PHPUnit_Framework_TestCase') ||
    version_compare(PHPUnit_Runner_Version::id(), '3.5') < 0
) {
    die('PHPUnit framework is required, at least 3.5 version');
}

if (!class_exists('PHPUnit_Framework_MockObject_MockBuilder')) {
    die('PHPUnit MockObject plugin is required, at least 1.0.8 version');
}
