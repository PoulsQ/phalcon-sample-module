<?php
/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 23/02/2017
 * Time: 10:18
 */

return new \Phalcon\Config([
	'database' => [
		'adapter'     => 'Mysql',
		'host'        => 'localhost',
		'username'    => 'devuser',
		'password'    => 'password',
		'dbname'      => 'project',
		'charset'     => 'utf8',
	]
]);