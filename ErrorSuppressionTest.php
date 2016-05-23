<?php
/**
 * 对会引发PHP 错误的代码的返回值进行测试
 */
class ErrorSuppressionTest extends PHPUnit_Framework_TestCase
{
    public function testFileWriting(){
        $writer = new FileWriter;
        $this->assertFalse(@$writer->write('/is-not-writeable/file', 'stuff'));
    }
}

class FileWriter
{
    
    public function write($file, $content)
    {
        $file = fopen($file, 'w');
        if ($file == false) {
            return false;
        }
        // ...
    }
}