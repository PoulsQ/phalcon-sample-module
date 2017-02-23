<?php
use Phalcon\Di\FactoryDefault;

error_reporting(E_ALL);

defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
define('CONFIG_DIR', BASE_PATH . '/app/config');

try {

    /**
     * The FactoryDefault Dependency Injector automatically registers
     * the services that provide a full stack framework.
     */
    $di = new FactoryDefault();

    /**
     * Read services
     */
    include APP_PATH . "/config/services.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

	$application->registerModules(
		[
			"front" => [
				"className" => "Application\\Front\\Module",
				"path"      => APP_PATH . "/modules/front/Module.php",
			],
			"chat"  => [
				"className" => "Application\\Chat\\Module",
				"path"      => APP_PATH . "/modules/chat/Module.php",
			]
		]
	);

	echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
