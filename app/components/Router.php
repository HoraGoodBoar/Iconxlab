<?php

class Router
{
    // Переміна яка буде зберігати роути які ми беремо з файлу app/config/web.php
    private $routes;

    // Функція яка вертає нам uri строку
    private function GetURI()
    {
        if( !empty( $_SERVER['REQUEST_URI'] ) )
        {
            return trim( $_SERVER['REQUEST_URI'], '/' );
        }
    }

    // На початку підгружаємо наші роути
    public function __construct()
    {
        $this->routes = include(ROOT.'/app/config/web.php');
    }


    public function run()
    {
       
        $uri = self::GetURI();

        // Цикл перевіряє чи uri який нам прийшов є у наших роутах і дізнаємось ім*я контролера та подію яку маємо виконати та виконуємо
        foreach ($this->routes as $uriPath => $path) {
            if( preg_match("~$uriPath~", $uri) ) 
            {
                // Створюю uri вже з іменем події, заміняю дані в строці, які ви можете глянути у app/config/web.php
                $internalPath = preg_replace("~$uriPath~",$path,$uri); 

                // Всі дані з uri переможу у масив
                $parameters =  explode('/', $internalPath);

                // Видаляю початок uri, назву сайта
                array_shift($parameters); 

                // Дізнаюсь назву контролера
                $nameController = ucfirst( array_shift($parameters) ).'Controller';
                // Дізнаюсь назву події
                $nameAction = array_shift($parameters).'Action';
                
                // Підключаю клас контролера
                if ( file_exists(ROOT.'/app/controllers/'.$nameController.'.php') )
                {
                    include_once( ROOT.'/app/controllers/'.$nameController.'.php' );
                }
                
                // Створюю екземпляр класу контролера
                $controller = new $nameController;
                // Запускаю подію контролера та дуже круто передаю параметри) Щоб не приймати у події масив, а можна було створити змінні в параметрах з гарними іменами
                $result = call_user_func_array( array( $controller, $nameAction),$parameters );

                if($result != null)
                {
                    break;
                }
            }
        }
    }

}