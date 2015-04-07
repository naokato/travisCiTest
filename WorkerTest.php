<?php
require dirname(__FILE__) . '/Worker.php';

class WorkerTest extends PHPUnit_Framework_TestCase
{
    public function testHello()
    {
        $target = new Worker();
        $this->assertSame("hello", $target->hello());

    }
}
