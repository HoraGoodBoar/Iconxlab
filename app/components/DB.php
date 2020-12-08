<?php  

class DB
{
    // Save all parameters for connection
    private $params = array(); 
    public function __construct()
    {
        $this->params =  include(ROOT.'/app/config/db.php');

        // Creates a table if it does not exist
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

    // Returns the connection to the database
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

    // Sends a request to the database and returns the data
    public function sendQuery($_query)
    {
        return mysqli_query(self::getConnection(), $_query);
    }
}