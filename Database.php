<?php
// connection to Mysql database and execute a query.
class Database {

    public $connection;
    function __construct() 
    { 
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";        
        
        $this->connection =  new PDO($dsn);
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
