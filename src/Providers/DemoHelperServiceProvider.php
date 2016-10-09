<?php
/**
 * Demo Helper Service Provider File.
 *
 * @author   Oliver Green <oliver@c5dev.com>
 * @license  See attached license file
 */
namespace Concrete\Package\PackageBoilerplate\Src\Providers;

use Core;
use Concrete\Core\Foundation\Service\Provider;

defined('C5_EXECUTE') or die('Access Denied.');

/**
 * Demo Helper Service Provider.
 */
class DemoHelperServiceProvider extends Provider
{
    public function register()
    {
        Core::bind('package/helper', 'Concrete\Package\PackageBoilerplate\Src\Helpers\DemoHelper');

        // After binding our helpers like this, we can then use \Core::make('boilerplate/helper') to 
        // get an instance of our helper anywhere within concrete.
    }

    public function boot()
    {
        // Code included here will be executed after all service providers have been 
        // registered and the CMS is booting.
    }
}
