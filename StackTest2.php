<?php

use PHPUnit\Framework\TestCase;

class StackTest2 extends TestCase
{
    /**/
    public function testEmpty()
    {
        $stack = [];

        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * testPush
     *
     * @depends testEmpty
     *
     * @param array $stack stack
     *
     * @return array
     *
     * @author Irfan Baig <irfan.baig@tajawal.com>
     */
    public function testPush(array $stack)
    {
//        $stack[] = 'anything';

        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * testPop
     *
     * @depends testPush
     *
     * @param array $stack stack
     *
     * @return array
     *
     * @author Irfan Baig <irfan.baig@tajawal.com>
     */
    public function testPop(array $stack)
    {
        $pop = array_pop($stack);

        $this->assertSame('anything', $pop);

        return $stack;
    }
}
