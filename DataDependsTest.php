<?php

class DataDependsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * testFirst
     *
     * @return string
     *
     * @author Irfan Baig <irfan.baig@tajawal.com>
     */
    public function testFirst()
    {
        $this->assertTrue(true);

        return 'first';
    }

    /**
     * testSecond
     *
     * @return string
     *
     * @author Irfan Baig <irfan.baig@tajawal.com>
     */
    public function testSecond()
    {
        $this->assertTrue(true);

        return 'second';
    }

    /**
     * testDataProvidersss
     *
     * @depends      testFirst
     * @depends      testSecond
     * @dataProvider anyProvider
     *
     * @return void
     *
     * @author       Irfan Baig <irfan.baig@tajawal.com>
     */
    public function testDataProvidersss()
    {

        $this->assertSame([0, 0, 0, 'first', 'second'], func_get_args());
    }

    /**/
    public function anyProvider()
    {
        return [
            [0, 0, 0],
        ];
    }
}
