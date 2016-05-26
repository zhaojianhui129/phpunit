<?php
/**
 * @requires extension mysqli
 * @author zhaojianhui
 *
 */
class DatabaseTest extends PHPUnit_Framework_TestCase
{
    protected static $dbh;
    
    protected function setUp(){
        if (!extension_loaded('mysqli')){
            $this->markTestSkipped('MySQLi 扩展不可用。');
        }
    }
    
    public static function setUpBeforeClass(){
        self::$dbh = new PDO('sqlite::memory:');
    }
    
    public static function tearDownAfterClass(){
        self::$dbh = NULL;
    }
    /**
     * @requires PHP 7
     */
    public function testConnection(){
        
    }
}