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
namespace Concrete\Package\BoilerplatePackage\Src\Helpers;

defined('C5_EXECUTE') or die('Access Denied.');

/**
 * Class ServiceProvider
 * This class provides registration for anything and everything that happens on load past autoload.
 *
 * @package Concrete\Package\LegacySample\Libraries
 */
class DemoHelper
{
    public function hello()
    {
        return 'Hello World!';
    }
}