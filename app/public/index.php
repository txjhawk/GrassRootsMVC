<?php
/**
 * Author: Anthony Allen
 */


/** Define grassrootsMVC constants */
define('VENDOR_DIR', '../../vendor/');

/** Require Autoloader */
require_once(VENDOR_DIR . 'autoload.php');

use GrassRootsMVC\Routing\Router;
use GrassRootsMVC\Routing\Dispatcher;

$route = new Router();

$dispatcher = new Dispatcher();

$dispatcher->dispatch($route);