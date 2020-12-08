<?php

class Router
{
    private $routes;

    // Get uri
    private function GetURI()
    {
        if( !empty( $_SERVER['REQUEST_URI'] ) )
        {
            return trim( $_SERVER['REQUEST_URI'], '/' );
        }
    }

    // Load data routes
    public function __construct()
    {
        $this->routes = include(ROOT.'/app/config/web.php');
    }


    public function run()
    {
       
        $uri = self::GetURI();

        // The cycle checks whether the uri that came to us is in our routes and we learn the name of the controller and the event we have to execute and execute
        foreach ($this->routes as $uriPath => $path) {
            if( preg_match("~$uriPath~", $uri) ) 
            {
                $internalPath = preg_replace("~$uriPath~",$path,$uri); 

                $parameters =  explode('/', $internalPath);

                array_shift($parameters); 

                $nameController = ucfirst( array_shift($parameters) ).'Controller';
                $nameAction = array_shift($parameters).'Action';
                
                if ( file_exists(ROOT.'/app/controllers/'.$nameController.'.php') )
                {
                    include_once( ROOT.'/app/controllers/'.$nameController.'.php' );
                }
                
                $controller = new $nameController;
                
                $result = call_user_func_array( array( $controller, $nameAction),$parameters );

                if($result != null)
                {
                    break;
                }
            }
        }
    }

}