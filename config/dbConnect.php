<?php
require_once 'config.php'; 
class Db {
    // variable uses to connect db
    protected static $connection;

    // function uses to connect
    public function Connect() {
        if (!isset(self::$connection)) {
            self::$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);  
        }

        // handle error when db connect failed
        if (self::$connection == false) {
            return false;
        }
        return self::$connection;
    }

    // function uses to execute query
    public function QueryExecute($queryString) {
        $connection = $this->Connect();
        $result = $connection->query($queryString);
        $connection->close();
        return $result;
    }
}