<?php
// .htaccess - це файл, у якому ми перенаправляємо всі uri запити на наш головний контролер *цей у якому ми зараз знаходимось*



// Виводим помилки під час розробки. Коли буде готово, поміняємо значення і помилки не будуть відображатись на сайті у цілях безпеки 
ini_set('display_errors',1);
error_reporting(E_ALL);

// Підключаємо файли
define('ROOT', dirname(__FILE__)); // Створюємо константу яка буде зберігати шлях директорії
require_once(ROOT.'/app/components/Router.php');
require_once(ROOT.'/app/components/DB.php');

// Запускаємо роутер
$router = new Router();
$router->run();

