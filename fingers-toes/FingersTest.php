<?php
include 'Fingers.php';

class FingersTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $f = new Fingers;
        $this->assertEquals($f->count(1), 1);
    }

    public function testTwo()
    {
        $f = new Fingers;
        $this->assertEquals($f->count(2), 2);
    }

    public function testThree()
    {
        $f = new Fingers;
        for ($i = 3; $i < 15; $i += 3) {
            $this->assertEquals($f->count($i), 'fizz');
        }
    }

    public function testSix()
    {
        $f = new Fingers;
        $this->assertEquals($f->count(6), 'fizz');
    }

    public function testFive()
    {
        $f = new Fingers;
        $this->assertEquals($f->count(5), 'buzz');
    }

    public function testFifteen()
    {
        $f = new Fingers;
        $this->assertEquals($f->count(15), 'fizzbuzz');
    }

    public function testList()
    {
        $f = new Fingers;
        $this->assertEquals($f->makelist(15), array(1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz', 11, 'fizz', 13, 14, 'fizzbuzz'));
    }
}
