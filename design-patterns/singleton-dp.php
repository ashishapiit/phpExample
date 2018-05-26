<?php

class Database {
    public $dbHost='localhost';
    public $dbName='test';
    public $dbUser= 'root';
    public $dbPass = '';
    public $dbh = '';
    private static $connection;
    public static $count = 0;
    private function __construct() {
       self::$count = (int)(self::$count) + 1;
       $this->dbh = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->dbUser, $this->dbPass);
    }
    public static  function createConnection(){
        if(self::$connection == null){
            self::$connection = new Database();
        }
        return self::$connection;
    }
    public function __clone() {
        throw new Exception("Not allowed");
    }
    public function __wakeup() {
        
    }
 }
    
    
    
}
echo '<pre>';
var_dump(Database::createConnection());
$obj = Database::createConnection();

//echo Database::$connection = "";
var_dump(Database::createConnection());
echo Database::$count;
var_dump(Database::createConnection());
echo Database::$count;

$obj2 = clone $obj;
var_dump($obj2);
echo Database::$count;


