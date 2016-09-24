<?php
/**
 * Boilerplate Package Controller File.
 *
 * PHP version 5.3
 *
 * @author   Oliver Green <oliver@c5dev.com>
 * @license  See attached license file
 * @link     https://c5dev.com
 */
namespace Concrete\Package\BoilerplatePackage\Src\Providers;

use Concrete\Core\Foundation\Service\Provider;

defined('C5_EXECUTE') or die('Access Denied.');

/**
 * Class ServiceProvider
 * This class provides registration for anything and everything that happens on load past autoload.
 *
 * @package Concrete\Package\LegacySample\Libraries
 */
class HelperServiceProvider extends Provider
{
    public function register()
    {
        \Core::bind('boilerplate/helper', 'Concrete\Package\BoilerplatePackage\Src\Helpers\DemoHelper');

        // After binding our helpers like this, we can then use \Core::make('boilerplate/helper') to 
        // get an instance of our helper anywhere within concrete.
    }
}