<?php
/**
 * 使用返回数组的数组的数据供给器
 */
class DataTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionCsvProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }
    /**
     * 返回数组的数组的数据供给器
     * @return array
     */
    public function additionProvider()
    {
        // return array(
        //     array(0, 0, 0),
        //     array(0, 1, 1),
        //     array(1, 0, 1),
        //     array(1, 1, 3),
        // );
        return array(
            'adding zeros'  => array(0, 0, 0),
            'zero plus one' => array(0, 1, 1),
            'one plus zero' => array(1, 0, 1),
            'one plus one'  => array(1, 1, 3),
        );
    }
    /**
     * 返回迭代器对象的数据供给器
     * @return interator
     */
    public function additionCsvProvider(){
        require 'CsvFileIterator.php';
        return new CsvFileIterator('data.csv');
    }
}
