<?php
header("Content-Type: text/html;charset=utf-8");
class SampleTest extends PHPUnit_Framework_TestCase
{
    public function testSomething()
    {
        //可选：如果愿意，这里随便测试点什么。
        $this->assertTrue(true, '这应该是已经是能正常工作的。');

        //在这里停止，并将此测试标记为未完成。
        $this->markTestIncomplete('此测试目前尚未实现。');

    }
}
