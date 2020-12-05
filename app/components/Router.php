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

        // Цикл який перевіряє чи uri який нам прийшов є у наших роутах і дізнаємось ім*я контролера та подію яку маємо виконати та виконуємо
        foreach ($this->routes as $uriPath => $path) {
            if( preg_match("~$uriPath~", $uri) ) 
            {
                $nameController = ucfirst( explode('/', $path)[0] ).'Controller';
                $nameAction = explode('/', $path)[1].'Action';
                
                if ( file_exists(ROOT.'/app/controllers/'.$nameController.'.php') )
                {
                    include_once( ROOT.'/app/controllers/'.$nameController.'.php' );
                }
                
                $controller = new $nameController;
                $result = $controller->mainAction();
                if($result != null)
                {
                    break;
                }
            }
        }
    }

}