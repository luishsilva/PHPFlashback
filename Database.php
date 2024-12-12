<?php
// connection to Mysql database and execute a query.
class Database {

    public $connection;
    function __construct($config, $username = 'root', $password = '')
    { 
        $dsn = 'mysql:'. http_build_query($config,'',';');
        
        $this->connection =  new PDO($dsn,  $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query( $query ) 
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

        
        
        $statement = $this->connection->prepare($query);
        
        $statement->execute();
        
        $posts = $statement;

        return $posts;
    }
}
