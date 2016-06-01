<?php
class MySqlGuestbookTest extends PHPUnit_Extensions_Database_TestCase{
    public function getConnection(){
        $database = 'my_databse';
        $user = 'my_user';
        $password = 'my_password';
        $pdo = new PDO('mysql:...', $user, $password);
        return $this->createDefaultDBConnection($pdo, $database);
    }
    
    public function testGuestbook(){
        $dataSet = $this->getConnection()->createDataSet();
        
        
    }
    
    public function testFilteredGuestbook(){
        $tableNames = array('guestbook');
        $dataSet = $this->getConnection()->createDataSet($tableNames);
        
        
    }
}