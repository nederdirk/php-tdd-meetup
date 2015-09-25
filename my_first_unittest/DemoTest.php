<?php
include 'Demo.php';

class DemoTest extends PHPUnit_Framework_TestCase
{
    public function testNegateZero()
    {
        $d = new Demo;
        $this->assertEquals($d->negate(0), 0, 'Zero is not negated');
    }

    public function testNegatePositive()
    {
        $d = new Demo;
        $this->assertEquals($d->negate(1), -1, 'Positive number becomes negative');
    }

    public function testNegateNegative()
    {
        $d = new Demo;
        $this->assertEquals($d->negate(-1), 1, 'Negative number becomes positive');
    }
}
