<?php
/**
 * 使用 expectException() 方法
 */
class ExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        //$this->expectException(InvalidArgumentException::class);
    }
}
