<?php

use PHPUnit\Framework\TestCase;

class StackTest1 extends TestCase {
    /**/
    public function testStackCount()
    {
        $stack = [];

        $this->assertSame(0, count($stack));

        $stack[] = 'stack 1';

        $this->assertSame(1, count($stack));
    }
}
