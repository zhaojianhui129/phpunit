<?php
class ArrayWeakComparisonTest extends PHPUnit_Framework_TestCase
{
    public function testEquality()
    {
        $this->assertEquals(
            array(1, 2, 3, 4, 5, 6),
            array('1', 2, 33, 4, 5, 6)
        );
    }
}
