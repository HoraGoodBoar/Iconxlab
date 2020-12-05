<?php  

class DB
{
    // Буде зберігати всі параметри підключення
    private $params = array(); 
    public function __construct()
    {
        $this->params =  include(ROOT.'/app/config/db.php');

        // Перевіряє чи є створена таблиця, якщо нема створює саме + заповнює даними, щоб ви не вводили довго)
        $query = self::sendQuery("SELECT * FROM users");
        if(!$query)
        {
            $query =( include(ROOT.'/app/config/CreatedTabelAndFullData.php') )[0];
            self::sendQuery( $query );

            $query = (include(ROOT.'/app/config/CreatedTabelAndFullData.php'))[1];
            self::sendQuery( $query );
        }
        //
    }

    // Повертає підключення до бази
    private function getConnection()
    {
        $link = mysqli_init();
        $success = mysqli_real_connect(
            $link, 
            $this->params['host'], 
            $this->params['user'], 
            $this->params['password'], 
            $this->params['db'],
            $this->params['port']
        );  
        return $link;
    }

    // Надсилає запит у базу та повертає дані
    public function sendQuery($_query)
    {
        return mysqli_query(self::getConnection(), $_query);
    }
}