<?php

// We display errors during development. When done, we will change the values and errors will not be displayed on the site for security reasons 
ini_set('display_errors',1);
error_reporting(E_ALL);

// Connection file
define('ROOT', dirname(__FILE__)); // Створюємо константу яка буде зберігати шлях директорії
require_once(ROOT.'/app/components/Router.php');
require_once(ROOT.'/app/components/DB.php');

// Run router
$router = new Router();
$router->run();

