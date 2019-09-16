<?php

/**
 * Class OutputTest
 */
class OutputTest extends \PHPUnit\Framework\TestCase
{
    /**
     * testOutMessage
     *
     * @return void
     *
     * @author Irfan Baig <irfan.baig@tajawal.com>
     */
    public function testOutMessage()
    {
        $this->expectOutputString('foo');

        echo 'foo';
    }

    /**/
    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');

        echo 'baz';
    }
}
