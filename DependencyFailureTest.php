<?php
/**
 * 利用测试之间的依赖关系
 */
class DependencyFailureTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $this->assertTrue(false);
    }
    /**
     * @depends testOne
     */
    public function testTwo()
    {

    }
}
