<?php
abstract class MyApp_Tests_DatabaseTestCase extends PHPUnit_Extensions_Database_TestCase
{
    //只实例化pdo一次，供测试的清理和装载基金使用
    static private $pdo = null;
    
    //对于每个测试，只实例化PHPUnit_Extensions_Database_DB_IDatabaseConnection一次
    private $conn = null;
    
    final public function getConnection(){
        if ($this->conn === null){
            if (self::$pdo == null){
                self::$pdo = new PDO('sqlite::memory:');
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, ':memory:');
        }
        return $this->conn;
    }
}