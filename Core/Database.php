<?php
namespace Core;

use PDO;

// connection to Mysql database and execute a query.
class Database {

    public $connection;
    public $statement;

    function __construct($config, $username = 'root', $password = '')
    { 
        $dsn = 'mysql:'. http_build_query($config,'',';');
        
        $this->connection =  new PDO($dsn,  $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query( $query, $params = [] ) 
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

        $this->statement = $this->connection->prepare($query);
        
        $this->statement->execute($params);

        return $this;
    }

    public function get(  )
    {
        return $this->statement->fetchAll();
    }

    public function find(  )
    {
        return $this->statement->fetch();
    }

    public function findOrFail(  )
    {
        $result = $this->find();
        return $result ? $result : abort();
    }
}
