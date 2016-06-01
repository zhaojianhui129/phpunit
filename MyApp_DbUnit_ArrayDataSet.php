<?php
class MyApp_DbUnit_ArrayDataSet extends PHPUnit_Extensions_Database_DataSet_AbstractDataSet
{
    /**
     * 
     * @var array
     */
    protected $tables = array();
    
    /**
     * 
     * @param array $data
     */
    public function __construct(array $data){
        foreach ($data AS $tableName => $rows){
            $columns = array();
            if (isset($rows[0])){
                $columns = array_keys($rows[0]);
            }
            
            $metaData = new PHPUnit_Extensions_Database_DataSet_DefaultDataSet($tableName, $columns);
            $table = new PHPUnit_Extensions_Database_DataSet_DefaultTable($metaData);
            
            foreach ($rows AS $row){
                $table->addRow($row);
            }
            $this->tables[$tableName] = $table;
            
        }
    }
    
    protected function createIterator($reverse = FALSE){
        return new PHPUnit_Extensions_Database_DataSet_DefaultTableIterator($this->tables, $reverse);
    }
    
    public function getTable($tableName){
        if (!isset($this->tables[$tableName])){
            throw new InvalidArgumentException("$tableName is Not a table in the current databse.");
        }
        
        return $this->tables[$tableName];
    }
}