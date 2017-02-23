<?php
/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 23/02/2017
 * Time: 10:36
 */

use Phalcon\Mvc\Router;

// Create the router
$router = new Router();

$router->setDefaultModule("front");

// Define global
$router->add(
	"/",
	[
		"module"	 => "front",
		"controller" => "index",
		"action"     => "index",
	]
);
$router->add(
	"/test",
	[
		"module"	 => "front",
		"controller" => "index",
		"action"     => "test",
	]
);